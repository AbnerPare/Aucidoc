<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumededUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Resumeded;
use Illuminate\View\View;

class ResumededController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function ded(Request $request): View
    {
        $users = Resumeded::paginate(10);
        return view('projets.ded', compact('users'));
    }

    public function dedcreate(Request $request): View
    {
        return view('projets.dedcreate', [
            'user' => $request->user(),
        ]);
    }

    public function storeded(Request $request)
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

        $user = new Resumeded([
            'Description' => $request->input('Description'),
            'Etat' => $request->input('Etat'),
            'pdf_path' => $pdfPath,
        ]);

        $user->save();

        return redirect()->route('projets.ded')->with([
            'message' => 'Resumeded added successfully!',
            'status' => 'success',
        ]);
    }
}
