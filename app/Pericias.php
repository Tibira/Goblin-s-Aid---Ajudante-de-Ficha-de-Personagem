<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pericias extends Model
{
    protected $fillable = [
        'nome_per', 'descricao_per',
    ];

    protected $hidden = [
        'vis',
    ];
}
