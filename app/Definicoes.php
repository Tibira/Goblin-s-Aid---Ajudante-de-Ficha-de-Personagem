<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definicoes extends Model
{
    protected $fillable = [
        'item', 'definicao',
    ];

    protected $hidden = [
        'vis',
    ];
}
