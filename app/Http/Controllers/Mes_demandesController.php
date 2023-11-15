<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mes_demandesUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class Mes_demandesController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function demande(Request $request): View
{
    return view('personnels.demande', [
        'user' => $request->user(),
    ]);
}
   
}



