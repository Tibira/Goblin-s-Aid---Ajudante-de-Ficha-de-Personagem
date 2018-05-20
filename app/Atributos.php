<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atributos extends Model
{
    protected $fillable = [
        'forca', 'destreza', 'inteligencia', 'sabedoria','constituicao','carisma',
    ];

    protected $hidden = [
        'vis',
    ];
}
