<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeadministrativeUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Resumeadministrative;
use Illuminate\View\View;

class ResumeadministrativeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function administrative(Request $request): View
    {
        $users = Resumeadministrative::paginate(10);
        return view('projets.administrative', compact('users'));
    }

    public function administrativecreate(Request $request): View
    {
        return view('projets.administrativecreate', [
            'user' => $request->user(),
        ]);
    }

    public function storeadministrative(Request $request)
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

        $user = new Resumeadministrative([
            'Description' => $request->input('Description'),
            'Etat' => $request->input('Etat'),
            'pdf_path' => $pdfPath,
        ]);

        $user->save();

        return redirect()->route('projets.protection')->with([
            'message' => 'Resumeded added successfully!',
            'status' => 'success',
        ]);
    }
}
