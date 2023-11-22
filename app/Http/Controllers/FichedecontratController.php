<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichedecontratUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Fichedecontrat;
use Illuminate\View\View;

class FichedecontratController extends Controller {
    /**
    * Display the user's profile form.
     */
    public function fichedecontrat(Request $request): View
    {
        $fiches = Fichedecontrat::paginate(10);
        return view('documents.fichedecontrat', compact('fiches'));
    }

    public function fichedecontratcreate(Request $request): View
{
    $fiche = $request->input('fiche'); // Supposant que 'fiche' est une clé dans la requête

    return view('documents.fichedecontratcreate', [
        'fiche' => $fiche,
    ]);
}


    public function storefichedecontrat(Request $request)
    {
        $request->validate([
            'Description' => 'required',
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

        $fiche = new Fichedecontrat; // Utilisez le bon nom de classe
        $fiche->Description = $request->input('Description');
        $fiche->pdf_path = $pdfPath;
        $fiche->save();

        return redirect()->route('documents.fichedecontrat')->with([
            'message' => 'Resumeded added successfully!',
            'status' => 'success',
        ]);
    }

}
