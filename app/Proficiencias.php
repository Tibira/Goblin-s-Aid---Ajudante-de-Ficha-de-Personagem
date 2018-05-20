<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proficiencias extends Model
{
    protected $fillable = [
        'nome_pro', 'descricao_pro',
    ];

    protected $hidden = [
        'vis',
    ];
}
