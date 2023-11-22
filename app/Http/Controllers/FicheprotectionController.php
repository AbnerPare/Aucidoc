<?php

namespace App\Http\Controllers;

use App\Http\Requests\FicheprotectionUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Ficheprotection;
use Illuminate\View\View;

class FicheprotectionController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function ficheprotection(Request $request): View
    {
        $users =  Ficheprotection::paginate(10);
        return view('documents.ficheprotection', compact('users'));
    }

    public function ficheprotectioncreate(Request $request): View
    {
        return view('documents.ficheprotectioncreate', [
            'user' => $request->user(),
        ]);
    }

    public function storeficheprotection(Request $request)
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

        $user = new  Ficheprotection([
            'Description' => $request->input('Description'),
            'pdf_path' => $pdfPath,
        ]);

        $user->save();

        return redirect()->route('documents.ficheprotection')->with([
            'message' => 'ficheprotection added successfully!',
            'status' => 'success',
        ]);
    }
}