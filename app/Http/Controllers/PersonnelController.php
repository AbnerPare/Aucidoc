<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonnelUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PersonnelController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function personnel(Request $request): View
    {
        return view('personnels.personnel', [
            'user' => $request->user(),
        ]);
    }
    public function admin(Request $request): View
    {
        return view('personnels.admin', [
            'user' => $request->user(),
        ]);
    }

   
}
