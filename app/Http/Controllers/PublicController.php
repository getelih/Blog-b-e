<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Follow;
use App\Models\Like;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index(){
        try {
            $posts = Post::with('user', 'images', 'tags')->withCount('comments')->latest()->paginate(16);

            if (request()->wantsJson() || collect(request()->route()->gatherMiddleware())->contains('api')) {
                return $posts;
            }

            return view('index', compact('posts'));
        } catch (\Throwable $e) {
            \Log::error('POSTS FETCH ERROR', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json(['error' => 'Server error'], 500);
        }
    }

    public function page1(){
        return view('page1');
    }

    public function page2(){
        return view('page2');
    }

    public function post(Post $post){
        try {
            if (request()->wantsJson() || collect(request()->route()->gatherMiddleware())->contains('api')) {
                return $post->load('user', 'images', 'comments', 'comments.user');
            }

            return view('post', compact('post'));
        } catch (\Throwable $e) {
            \Log::error('POST FETCH ERROR', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json(['error' => 'Server error'], 500);
        }
    }

    public function user(User $user){
        $posts = $user->posts()->with('user')->withCount('comments')->latest()->paginate(16);
        return view('user', compact('posts', 'user'));
    }

    public function comment(Post $post, StoreCommentRequest $request){
        $comment = new Comment();
        $comment->body = $request->input('body');
        $comment->user()->associate(Auth::user());
        $comment->post()->associate($post);
        $comment->save();

        if (request()->wantsJson() || collect(request()->route()->gatherMiddleware())->contains('api')) {
            return $comment->load('user');
        }

        return redirect()->back();
    }

    public function like(Post $post, Request $request){
        $like = $post->likes()->where('user_id', Auth::id())->first();

        if ($like) {
            $like->delete();
        } else {
            $like = new Like();
            $like->user()->associate(Auth::user());
            $like->post()->associate($post);
            $like->save();
        }

        if (request()->wantsJson() || collect(request()->route()->gatherMiddleware())->contains('api')) {
            return response()->noContent();
        }

        return redirect()->back();
    }

    public function tag(Tag $tag){
        $posts = $tag->posts()->with('user')->withCount('comments')->latest()->paginate(16);
        return view('index', compact('posts'));
    }

    public function follow(User $user){
        $follow = Follow::where('follower_id', Auth::id())->where('followee_id', $user->id)->first();

        if ($follow) {
            $follow->delete();
        } else {
            $follow = new Follow();
            $follow->follower()->associate(Auth::user());
            $follow->followee()->associate($user);
            $follow->save();
        }

        return redirect()->back();
    }

    public function category(Category $category){
        $posts = $category->getAllChildrenPostsQuery->with('user')->withCount('comments')->latest()->paginate(16);
        return view('index', compact('posts'));
    }
}
