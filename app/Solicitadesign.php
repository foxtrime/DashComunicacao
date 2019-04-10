<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitadesign extends Model
{
    protected $table = "solicitadesigns";

     protected $fillable = [
        'solicitacoes',
        'mes',
    ];

}
