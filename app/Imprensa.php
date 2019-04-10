<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imprensa extends Model
{
    protected $table = "imprensas";

    protected $fillable = [
        		'clipping',
            'noticias',
            'mes',
    ];

 }
