<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DocumentController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function document(Request $request): View
    {
        return view('documents.document', [
            'user' => $request->user(),
        ]);
    }
    public function rapport(Request $request): View
    {
        return view('documents.rapportdeprojet', [
            'user' => $request->user(),
        ]);
    }

  
}
