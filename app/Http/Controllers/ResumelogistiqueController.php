<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumelogistiqueUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Resumelogistique;
use Illuminate\View\View;

class ResumelogistiqueController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function logistique(Request $request): View
    {
        $users = Resumelogistique::paginate(10);
        return view('projets.logistique', compact('users'));
    }

    public function logistiquecreate(Request $request): View
    {
        return view('projets.logistiquecreate', [
            'user' => $request->user(),
        ]);
    }

    public function storelogistique(Request $request)
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

        $user = new Resumelogistique([
            'Description' => $request->input('Description'),
            'Etat' => $request->input('Etat'),
            'pdf_path' => $pdfPath,
        ]);

        $user->save();

        return redirect()->route('projets.dhc')->with([
            'message' => 'Resumeded added successfully!',
            'status' => 'success',
        ]);
    }
}
