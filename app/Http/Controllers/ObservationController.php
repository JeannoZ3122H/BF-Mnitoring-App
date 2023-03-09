<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use App\Services\CodeGeretor;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ObservationController extends Controller
{
    public function Add_observation(Request $request)
    {
        if (empty($request->type_media)) {
            toast('Champ Obligatoire', 'error');
            
            return back();
        }
        if (empty($request->name_media)) {
            toast('Champ Obligatoire', 'error');
            
            return back();
        }
        if (empty($request->emission)) {
            toast('Champ Obligatoire', 'error');
            
            return back();
        }
        // if (empty($request->date_diffusions)) {
        //     toast('Champ Obligatoire', 'error');
            
        //     return back();
        // }
        // if (empty($request->video)) {
        //     toast('Champ Obligatoire', 'error');
            
        //     return back();
        // }
        // if (empty($request->audio)) {
        //     toast('Champ Obligatoire', 'error');
            
        //     return back();
        // }
        // if (empty($request->text_faute)) {
        //     toast('Champ Obligatoire', 'error');
            
        //     return back();
        // }
        // if (empty($request->screenshot)) {
        //     toast('Champ Obligatoire', 'error');
            
        //     return back();
        // }
        // if (empty($request->url_article)) {
        //     toast('Champ Obligatoire', 'error');
            
        //     return back();
        // }
        // if (empty($request->docs_pdf)) {
        //     toast('Champ Obligatoire', 'error');
            
        //     return back();
        // }

        $add_observation = new Observation();

        $add_observation->type_media = $request->type_media;
        $add_observation->name_media = $request->name_media;
        $add_observation->emission = $request->emission;
        $add_observation->date_diffusions = $request->date_diffusions;
        $add_observation->video = $request->video;
        $add_observation->audio = $request->audio;
        $add_observation->text_faute = $request->text_faute;
        $add_observation->screenshot = $request->screenshot;
        $add_observation->url_article = $request->url_article;
        $add_observation->docs_pdf = $request->docs_pdf;
        $add_observation->comments = $request->comments;

        $add_observation->rfk = CodeGeretor::codeRfk();

        if($add_observation->save()){
            toast('Votre Observation a été envoyer merci !!', 'success');

            return redirect()->route('add_observations');
        }
    }
}
