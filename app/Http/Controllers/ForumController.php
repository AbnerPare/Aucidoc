<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForumUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ForumController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function forum(Request $request): View
    {
        return view('forum.forum', [
            'user' => $request->user(),
        ]);
    }

   
}
