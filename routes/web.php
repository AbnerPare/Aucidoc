<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Mes_demandesController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ResumededController;
use App\Http\Controllers\ResumedhcController;
use App\Http\Controllers\ResumelogistiqueController;
use App\Http\Controllers\ResumeprotectionController;
use App\Http\Controllers\ResumeadministrativeController;






use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('auth')->group(function () {
    Route ::get('/administrative', [ResumeadministrativeController ::class,'administrative'])->name('projets.administrative') ;
    Route ::get('/administrativecreate', [ResumeadministrativeController ::class,'administrativecreate'])->name('projets.administrativecreate') ;
    Route ::post('/administrative', [ResumeadministrativeController ::class,'storeadministrative'])->name('projets.storeadministrative') ;

});

Route::middleware('auth')->group(function () {
    Route ::get('/protection', [ResumeprotectionController ::class,'protection'])->name('projets.protection') ;
    Route ::get('/protectioncreate', [ResumeprotectionController ::class,'protectioncreate'])->name('projets.protectioncreate') ;
    Route ::post('/protection', [ResumeprotectionController ::class,'storeprotection'])->name('projets.storeprotection') ;

});

Route::middleware('auth')->group(function () {
    Route ::get('/logistique', [ResumelogistiqueController ::class,'logistique'])->name('projets.logistique') ;
    Route ::get('/logistiquecreate', [ResumelogistiqueController ::class,'logistiquecreate'])->name('projets.logistiquecreate') ;
    Route ::post('/logistique', [ResumelogistiqueController ::class,'storelogistique'])->name('projets.storelogistique') ;

});

Route::middleware('auth')->group(function () {
    Route ::get('/dhc', [ResumedhcController ::class,'dhc'])->name('projets.dhc') ;
    Route ::get('/dhccreate', [ResumedhcController ::class,'dhccreate'])->name('projets.dhccreate') ;
    Route ::post('/dhc', [ResumedhcController ::class,'storedhc'])->name('projets.storedhc') ;

});

Route::middleware('auth')->group(function () {
    Route ::get('/ded', [ResumededController ::class,'ded'])->name('projets.ded') ;
    Route ::get('/dedcreate', [ResumededController ::class,'dedcreate'])->name('projets.dedcreate') ;
    Route ::post('/ded', [ResumededController ::class,'storeded'])->name('projets.storeded') ;

});


Route::middleware('auth')->group(function () {
    Route ::get('/forum', [ForumController ::class, 'forum'])->name('forum.forum') ;
});
Route::middleware('auth')->group(function () {
    Route ::get('/document', [DocumentController ::class, 'document'])->name('documents.document') ;
});
Route::middleware('auth')->group(function () {
     Route ::get('/projet', [ProjetController ::class, 'projet'])->name('projets.projet') ;
 });
 Route::middleware('auth')->group(function () {
    Route ::get('/demande', [Mes_demandesController ::class, 'demande'])->name('personnels.demande') ;

});
Route::middleware('auth')->group(function () {
    Route ::get('/admin', [PersonnelController ::class, 'admin'])->name('personnels.admin') ;
    Route ::get('/personnel', [PersonnelController ::class, 'personnel'])->name('personnels.personnel') ;
    Route ::get('/personnelcreate', [PersonnelController ::class,'personnelcreate'])->name('personnels.personnelcreate') ;
    Route ::post('/personnel', [PersonnelController ::class,'storepersonnel'])->name('personnels.storepersonnel') ;
    Route::get('/{personnel}', [PersonnelController::class, 'edit'])->name('personnels.edit');
    Route::put('/{id}', [PersonnelController::class, 'update'])->name('personnels.update');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('accueil');
})->middleware(['auth', 'verified'])->name('accueil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

