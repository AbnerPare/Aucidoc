<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumedhcUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Resumedhc;
use Illuminate\View\View;

class ResumedhcController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function dhc(Request $request): View
    {
        $users = Resumedhc::paginate(10);
        return view('projets.dhc', compact('users'));
    }

    public function dhccreate(Request $request): View
    {
        return view('projets.dhccreate', [
            'user' => $request->user(),
        ]);
    }

    public function storedhc(Request $request)
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

        $user = new Resumedhc([
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
