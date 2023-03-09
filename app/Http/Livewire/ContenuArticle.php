<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContenuArticle extends Component
{
// 891d0a => rouge
// 17154e => blue
    public $message;
    public $type_media;
    public $contenu = null;

    public function render()
    {
        $this->type_media;
        return view('livewire.contenu-article');
    }
}
