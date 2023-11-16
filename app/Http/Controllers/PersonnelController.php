<?php
namespace App\Http\Controllers;

use App\Http\Requests\ResumedhcUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Personnel;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PersonnelController extends Controller {
    public function admin( Request $request ): View {
        return view( 'personnels.admin', [
            'user' => $request->user(),
        ] );
    }

    public function personnel( Request $request ): View {
        $users = Personnel::paginate( 10 );
        return view( 'personnels.personnel', compact( 'users' ) );
    }

    public function personnelcreate( Request $request ): View {
        return view( 'personnels.personnelcreate', [
            'user' => $request->user(),
        ] );
    }

    public function storepersonnel( Request $request ) {
        $validatedData = $request->validate( [
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required|email|unique:personnels',
            'Téléphone' => 'required',
            'Département' => 'required',
            'Statut_de_présence' => 'required',
            'Precision' => 'required',
        ] );

        Personnel::create( [
            'Nom' => $validatedData[ 'Nom' ],
            'Prénom' => $validatedData[ 'Prénom' ],
            'Email' => trim( $validatedData[ 'Email' ] ),
            'Téléphone' => $validatedData[ 'Téléphone' ],
            'Département' => $validatedData[ 'Département' ],
            'Statut_de_présence' => $validatedData[ 'Statut_de_présence' ],
            'Precision' => $validatedData[ 'Precision' ],
        ] );

        $user = $request->user();

        return redirect()->route( 'personnels.personnel' )->with( [
            'message' => 'Resumeded added successfully!',
            'status' => 'success',
        ] );
    }
    
    public function edit( $id ) {
        try {
            $user = Personnel::findOrFail( $id );
            return view( 'personnels.edit', compact( 'user' ) );
        } catch ( \Exception $e ) {
            abort( 404 );
        }
    }

    public function update( Request $request, $id ) {
        $validatedData = $request->validate( [
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required|email|unique:personnels,Email,'.$id,
            'Téléphone' => 'required',
            'Département' => 'required',
            'Statut_de_présence' => 'required',
            'Precision' => 'required',
        ] );

        $user = Personnel::find( $id );
        if ( !$user ) {
            abort( 404 );
        }

        $user->Nom = $validatedData[ 'Nom' ];
        $user->Prénom = $validatedData[ 'Prénom' ];
        $user->Email = trim( $validatedData[ 'Email' ] );
        $user->Téléphone = $validatedData[ 'Téléphone' ];
        $user->Département = $validatedData[ 'Département' ];
        $user->Statut_de_présence = $validatedData[ 'Statut_de_présence' ];
        $user->Precision = $validatedData[ 'Precision' ];
        $user->save();

        return redirect()->route( 'personnels.personnel' )->with( [
            'message' => 'Personnel modifié avec succès !',
            'status' => 'success'
        ] );
    } 


}

