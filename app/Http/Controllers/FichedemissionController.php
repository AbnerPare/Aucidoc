<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichedemissionUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Fichedemission;
use Illuminate\View\View;

class FichedemissionController extends Controller {
    /**
    * Display the user's profile form.
     */
    public function fichedemission(Request $request): View
    {
        $fiches = Fichedemission::paginate(10);
        return view('documents.fichedemission', compact('fiches'));
    }

    public function fichedemissioncreate(Request $request): View
{
    $fiche = $request->input('fiche'); // Supposant que 'fiche' est une clé dans la requête

    return view('documents.fichedemissioncreate', [
        'fiche' => $fiche,
    ]);
}


    public function storefichedemission(Request $request)
    {
        $request->validate([
            'Lieu' => 'required',
            'Région' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
         ]);

        $pdfPath = null;

        // Gestion du fichier PDF
        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('pdfs', $pdfFileName, 'public');
            // Stockage du fichier PDF
        }

        $fiche = new Fichedemission;
        $fiche->Lieu = $request->input( 'Lieu' );
        $fiche->Région = $request->input( 'Région' );
        $fiche->pdf_path = $pdfPath;
        $fiche->save();

        return redirect()->route('documents.fichedemission')->with([
            'message' => 'Resumeded added successfully!',
            'status' => 'success',
        ]);
    }

}
