<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContenuArticle extends Component
{

    public $type_media = null;
    public $contenu = null;

    public function active($value)
    {
        $this->type_media = $value;
        
        dd($this->type_media);
        exit();
    }
    // dd($this->type_media);
    // exit();


    public function render()
    {
        return view('livewire.contenu-article');
    }
}
