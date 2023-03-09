<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    public $fileable = [
        'type_media',
        'name_media',
        'emission',
        'date_diffusions',
        'video',
        'audio',
        'text_faute',
        'screenshot',
        'url_article',
        'docs_pdf',
        'comments',
        'decision_finale',
    ];  
}
