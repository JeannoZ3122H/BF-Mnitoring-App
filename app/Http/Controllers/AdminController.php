<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('pages.backend.index');
    }

    //categories
    public function gestion_categorie(){
        return view('pages.backend.categorie.gestion_categorie');
    }

    public function form_categorie()
    {
        return view('pages.backend.categorie.form_categorie');
    }

    //media
    public function gestion_media()
    {
        return view('pages.backend.media.gestion_media');
    }

    public function form_media()
    {
        return view('pages.backend.media.form_media');
    }

    //faute
    public function gestion_faute()
    {
        return view('pages.backend.faute.gestion_faute');
    }

    public function form_faute()
    {
        return view('pages.backend.faute.form_faute');
    }

    //sanction

    public function sanction()
    {
        return view('pages.backend.sanction.sanction');
    }

    public function form_sanction()
    {
        return view('pages.backend.sanction.form_sanction');
    }

    //gestion utilisateur

    Public  function gestion_utilisateur()
    {
        return view('pages.backend.utilisateur.gesttion_utilisateur');
    }

    public function form_utilisateur()
    {
        return view('pages.backend.utilisateur.form_utilisateur');
    }

    //assignation

    public function assignation()
    {
        return view('pages.backend.assignation.assignation');
    }

    public function form_assignation()
    {
        return view('pages.backend.assignation.form_assignation');
    }
    //gestion des grpupes

    public function gestion_groupe()
    {
        return view('pages.backend.groupe.gestion_groupe');
    }

    public function form_groupe()
    {
        return view('pages.backend.groupe.form_groupe');
    }

    //journal
    public function journal()
    {
        return view('pages.backend.journal.journal');
    }

    //rapport

    public function rapport()
    {
        return view('pages.backend.rapport.rapport');
    }

    //regulateur
    public function regulateur()
    {
        return view('pages.backend.regulateur.regulateur');
    }

    public function form_regulateur()
    {
        return view('pages.backend.regulateur.form_regulateur');
    }
    //outil regulations

    public function outil_regulation()
    {
        return view('pages.backend.outil.outil_regulation');
    }

    public function form_outil()
    {
        return view('pages.backend.outil.form_outil');
    }

    //projet courrier

    public function projet_courrier()
    {
        return view('pages.backend.projet.projet_courrier');
    }

    //courrier envoye

    public function courrier_envoye()
    {
        return view('pages.backend.courrier.courrier_envoye');
    }
}
