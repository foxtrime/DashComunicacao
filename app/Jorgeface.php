<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jorgeface extends Model
{
    protected $table = "Jorgefaces";

    protected $fillable = [
        	'total_seguidores',
            'envolvimento',
            'total_curtidas',
            'crescimento',
            'total_publicacoes',
            'reacoes',
            'comentarios',
            'compartilhamentos',
            'mes',
    ];

 }
