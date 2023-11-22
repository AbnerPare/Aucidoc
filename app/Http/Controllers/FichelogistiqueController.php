<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichelogistiqueUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Fichelogistique;
use Illuminate\View\View;

class FichelogistiqueController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function fichelogistique(Request $request): View
    {
        $users =  Fichelogistique::paginate(10);
        return view('documents.fichelogistique', compact('users'));
    }

    public function fichelogistiquecreate(Request $request): View
    {
        return view('documents.fichelogistiquecreate', [
            'user' => $request->user(),
        ]);
    }

    public function storefichelogistique(Request $request)
    {
        $request->validate([
            'Description' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
        ]);

        // Gestion du fichier PDF
        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('pdfs', $pdfFileName, 'public');
            // Stockage du fichier PDF
        }

        $user = new  Fichelogistique([
            'Description' => $request->input('Description'),
            'pdf_path' => $pdfPath,
        ]);

        $user->save();

        return redirect()->route('documents.fichelogistique')->with([
            'message' => 'fichelogistique added successfully!',
            'status' => 'success',
        ]);
    }
}