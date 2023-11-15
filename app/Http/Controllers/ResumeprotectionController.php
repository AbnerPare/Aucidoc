<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeprotectionUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Resumeprotection;
use Illuminate\View\View;

class ResumeprotectionController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function protection(Request $request): View
    {
        $users = Resumeprotection::paginate(10);
        return view('projets.protection', compact('users'));
    }

    public function protectioncreate(Request $request): View
    {
        return view('projets.protectioncreate', [
            'user' => $request->user(),
        ]);
    }

    public function storeprotection(Request $request)
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

        $user = new Resumeprotection([
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
