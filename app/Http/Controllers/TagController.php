<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tags = Tag::orderBy('created_at', 'desc')->paginate(10);

        if ($request->ajax()) {

            return response()->json(['tags' => $tags]);
        }

        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name',
        ]);

        $tag = Tag::create(['name' => $request->name]);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'tag' => $tag]);
        }

        return redirect()->route('tags.index')->with('success', 'Tag created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Tag $tag)
    {
        if ($request->ajax()) {
            return response()->json(['tag' => $tag]);
        }

        return view('tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,' . $tag->id,
        ]);

        $tag->update([
            'name' => $request->name,
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'tag' => $tag]);
        }

        return redirect()->route('tags.index')->with('success', 'Tag updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Tag $tag)
    {
        $tag->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('tags.index')->with('success', 'Tag deleted successfully.');
    }
}
