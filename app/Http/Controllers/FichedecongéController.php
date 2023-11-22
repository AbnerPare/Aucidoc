<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichedecongéUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Fichedecongé;
use Illuminate\View\View;

class FichedecongéController extends Controller {
    /**
    * Display the user's profile form.
     */
    public function fichedecongé(Request $request): View
    {
        $fiches = Fichedecongé::paginate(10);
        return view('documents.fichedecongé', compact('fiches'));
    }

    public function fichedecongécreate(Request $request): View
{
    $fiche = $request->input('fiche'); // Supposant que 'fiche' est une clé dans la requête

    return view('documents.fichedecongécreate', [
        'fiche' => $fiche,
    ]);
}


    public function storefichedecongé(Request $request)
    {
        $request->validate( [
            'Nom' => 'required',
            'Prénom' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
        ] );
        $pdfPath = null;

        // Gestion du fichier PDF
        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('pdfs', $pdfFileName, 'public');
            // Stockage du fichier PDF
        }

        $fiche = new Fichedecongé;
        $fiche->Nom = $request->input( 'Nom' );
        $fiche->Prénom = $request->input( 'Prénom' );
        $fiche->pdf_path = $pdfPath;
        $fiche->save();
        return redirect()->route('documents.fichedecongé')->with([
            'message' => 'Resumeded added successfully!',
            'status' => 'success',
        ]);
    }

}