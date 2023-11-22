<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichedhcUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Fichedhc;
use Illuminate\View\View;

class FichedhcController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function fichedhc(Request $request): View
    {
        $users = Fichedhc::paginate(10);
        return view('documents.fichedhc', compact('users'));
    }

    public function fichedhccreate(Request $request): View
    {
        return view('documents.fichedhccreate', [
            'user' => $request->user(),
        ]);
    }

    public function storefichedhc(Request $request)
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

        $user = new Fichedhc([
            'Description' => $request->input('Description'),
            'pdf_path' => $pdfPath,
        ]);

        $user->save();

        return redirect()->route('documents.fichedhc')->with([
            'message' => 'ficheded added successfully!',
            'status' => 'success',
        ]);
    }
}
