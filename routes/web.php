<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontController::class, 'index'])->name('index');
// sign-in
Route::get('/sign-in',[FrontController::class, 'sign_in'])->name('sign-in');
// login
Route::get('/login',[FrontController::class, 'login'])->name('login');

// // Phase 1

    // step_one
        Route::get('/list_observation',[FrontController::class, 'list_observation'])->name('list_observation');
        Route::get('/add_observation',[FrontController::class, 'add_observation'])->name('add_observation');

    // step_two
        Route::get('/liste_observation',[FrontController::class, 'liste_observation'])->name('liste_observation');
        Route::get('/update_observation',[FrontController::class, 'update_observation'])->name('update_observation');
        Route::get('/profile',[FrontController::class, 'profile'])->name('profile');

    // step_three
        Route::get('/liste_observation',[FrontController::class, 'liste_observation_step_three'])->name('liste_observation_step_three');
        Route::get('/validate_observation',[FrontController::class, 'validate_observation_step_three'])->name('validate_observation_step_three');
        Route::get('/profile',[FrontController::class, 'profil_step_three'])->name('profil_step_three');


// // Phase 2

    // step_one
        Route::get('/list_observation_end',[FrontController::class, 'list_observation_end'])->name('list_observation_end');
        Route::get('/edit_rapport',[FrontController::class, 'edit_rapport'])->name('edit_rapport');
        Route::get('/profil_di',[FrontController::class, 'profil_di'])->name('profil_di');

    // step_two
        Route::get('/liste_rapports',[FrontController::class, 'liste_rapports'])->name('liste_rapports');
        Route::get('/validate_rapports',[FrontController::class, 'validate_rapports'])->name('validate_rapport');
        Route::get('/profile_pc',[FrontController::class, 'profile_pc'])->name('profile_pc');


// // Phase 3

    // step_one
        Route::get('/rapports_annote',[FrontController::class, 'rapports_annote'])->name('rapports_annote');
        Route::get('/repertoire_rapports',[FrontController::class, 'repertoire_rapports'])->name('repertoire_rapports');
        Route::get('/profile_sg',[FrontController::class, 'profile_sg'])->name('profile_sg');

    // step_two
        Route::get('/profile_vp',[FrontController::class, 'profile_vp'])->name('profile_vp');
        Route::get('/repertoire_rapports_an',[FrontController::class, 'repertoire_rapports_an'])->name('repertoire_rapports_an');
        Route::get('/rapports_an_validate',[FrontController::class, 'rapports_an_validate'])->name('rapports_an_validate');

// // Frontforms | Observations

    // add_obs
    Route::post('/add_observations', [ObservationController::class, 'Add_observation'])->name('add_observations');


//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::post('/admin/add-categorie', [AdminController::class, 'add_categorie'])->name('add_categorie');
Route::get('/admin/gestion-categorie', [AdminController::class, 'gestion_categorie'])->name('gestion_categorie');
Route::get('/admin/form-categorie', [AdminController::class, 'form_categorie'])->name('form_categorie');

Route::post('/admin/add-media', [AdminController::class, 'add_media'])->name('add_media');
Route::get('/admin/gestion-media', [AdminController::class, 'gestion_media'])->name('gestion_media');
Route::get('/admin/form-media', [AdminController::class, 'form_media'])->name('form_media');

Route::post('/admin/add-assignation', [AdminController::class, 'add_assignation'])->name('add_assignation');
Route::get('/admin/assignation', [AdminController::class, 'assignation'])->name('assignation');
Route::get('/admin/form-assignation', [AdminController::class, 'form_assignation'])->name('form_assignation');

Route::post('/admin/add-faute', [AdminController::class, 'add_faute'])->name('add_faute');
Route::get('/admin/gestion-faute', [AdminController::class, 'gestion_faute'])->name('gestion_faute');
Route::get('/admin/form-faute', [AdminController::class, 'form_faute'])->name('form_faute');

Route::post('/admin/add-sanction', [AdminController::class, 'add_sanction'])->name('add_sanction');
Route::get('/admin/sanction', [AdminController::class, 'sanction'])->name('sanction');
Route::get('/admin/form-sanction', [AdminController::class, 'form_sanction'])->name('form_sanction');

Route::post('/admin/add-utilisateur', [AdminController::class, 'add_utiliasteur'])->name('add_utilisateur');
Route::get('/admin/gestion-utilisateur', [AdminController::class, 'gestion_utilisateur'])->name('gestion_utilisateur');
Route::get('/admin/form-utilisateur', [AdminController::class, 'form_utilisateur'])->name('form_utilisateur');

Route::post('/admin/add-groupe', [AdminController::class,'add_groupe'])->name('add_groupe');
Route::get('/admin/gestion-groupe', [AdminController::class, 'gestion_groupe'])->name('gestion_groupe');
Route::get('/admin/form-groupe', [AdminController::class, 'form_groupe'])->name('form_groupe');


Route::get('/admin/gestion-journal', [AdminController::class,'journal'])->name('journal');

Route::get('/admin/gesttion-rapport', [AdminController::class,'rapport'])->name('rapport');

Route::post('/admin/add-regulation', [AdminController::class, 'add_regulation'])->name('add_regulation');
Route::get('/admin/regulateur', [AdminController::class,'regulateur'])->name('regulateur');
Route::get('/admin/form-regulateur', [AdminController::class,'form_regulateur'])->name('form_regulateur');

Route::post('/admin/add-outil', [AdminController::class,'add_outil'])->name('add_outil');
Route::get('/admin/outil-regulation', [AdminController::class,'outil_regulation'])->name('outil_regulation');
Route::get('/admin/form-outil', [AdminController::class,'form_outil'])->name('form_outil');


Route::get('/admin/projet-courrier', [AdminController::class,'projet_courrier'])->name('projet_courrier');

Route::get('/admin/courrier-envoye', [AdminController::class,'courrier_envoye'])->name('courrier_envoye');
