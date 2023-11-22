<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichededUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Ficheded;
use Illuminate\View\View;

class FichededController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function ficheded(Request $request): View
    {
        $users = Ficheded::paginate(10);
        return view('documents.ficheded', compact('users'));
    }

    public function fichededcreate(Request $request): View
    {
        return view('documents.fichededcreate', [
            'user' => $request->user(),
        ]);
    }

    public function storeficheded(Request $request)
    {
        $request->validate([
            'Description' => 'required',
            'Etat' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
        ]);

        // Gestion du fichier PDF
        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('pdfs', $pdfFileName, 'public');
            // Stockage du fichier PDF
        }

        $user = new Ficheded([
            'Description' => $request->input('Description'),
            'Etat' => $request->input('Etat'),
            'pdf_path' => $pdfPath,
        ]);

        $user->save();

        return redirect()->route('documents.ficheded')->with([
            'message' => 'ficheded added successfully!',
            'status' => 'success',
        ]);
    }
}
