<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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