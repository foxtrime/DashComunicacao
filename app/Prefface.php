<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefface extends Model
{
    protected $table = "preffaces";

     protected $fillable = [
    		'seguidores',
            'alcance',
            'envolvimento',
            'interacoes',
            'publicacoes',
            'seg_insta',
            'mes',
      ];
 }
