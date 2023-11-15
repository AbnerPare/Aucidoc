<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProjetController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function projet(Request $request): View
    {
        return view('projets.projet', [
            'user' => $request->user(),
        ]);
    }

  
}
