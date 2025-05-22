<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request)
{
    if ($request->user()->hasVerifiedEmail()) {
        return response()->json([
            'message' => 'Email is already verified.'
        ]);
    }

    return response()->json([
        'message' => 'Email is not verified.'
    ], 403);
}

}
