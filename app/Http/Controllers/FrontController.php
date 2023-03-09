<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    // index
    public function index(){
        return view('pages.frontend.Phase 1.step_one.liste_observations');
    }

// // Phase 1
    //  Step_one
        public function list_observation(){
            return view('pages.frontend.Phase 1.step_one.liste_observations');
        }
        public function add_observation(){
            return view('pages.frontend.Phase 1.step_one.add_observations');
        }
    // step_two
        public function liste_observation(){
            return view('pages.frontend.Phase 1.step_two.liste_observations');
        }
        public function update_observation(){
            return view('pages.frontend.Phase 1.step_two.liste_selectionnes');
        }
        public function profile(){

            return view('pages.frontend.Phase 1.step_two.profile');
        }

    // step_three
        public function liste_observation_step_three(){
            return view('pages.frontend.Phase 1.step_three.liste_observation');

        }
        public function validate_observation_step_three(){

            return view('pages.frontend.Phase 1.step_three.validate_observation');
        }
        public function profil_step_three(){

            return view('pages.frontend.Phase 1.step_three.profile');
        }


// // phase 2

    // step_one
        public function list_observation_end(){
            return view('pages.frontend.Phase 2.step_one.liste_observations');
        }
        public function edit_rapport(){
            return view('pages.frontend.Phase 2.step_one.edit_rapports');
        }
        public function profil_di(){
            return view('pages.frontend.Phase 2.step_one.profile');
        }

    // step_two
        public function liste_rapports(){
            return view('pages.frontend.Phase 2.step_two.liste_rapports');

        }
        public function validate_rapports(){

            return view('pages.frontend.Phase 2.step_two.validate_rapports');
        }
        public function profile_pc(){

            return view('pages.frontend.Phase 2.step_two.profile');
        }

// // phase 3

    // step_one
        public function profile_sg(){
            return view('pages.frontend.Phase 3.step_one.profile_sg');
        }
        public function rapports_annote(){
            return view('pages.frontend.Phase 3.step_one.rapports_annote');
        }
        public function repertoire_rapports(){
            return view('pages.frontend.Phase 3.step_one.repertoire_rapports');
        }

    // step_two
        public function repertoire_rapports_an(){
            return view('pages.frontend.Phase 3.step_two.repertoire_rapports_an');
        }
        public function rapports_an_validate(){
            return view('pages.frontend.Phase 3.step_two.rapports_an_validate');
        }
        public function profile_vp(){
            return view('pages.frontend.Phase 3.step_two.profile_vp');
        }


    // sign-in
        public function sign_in(){
            return view('pages.frontend.forms.sign_in');
        }

    // login
        public function login(){
            return view('pages.frontend.forms.login');
        }
}
