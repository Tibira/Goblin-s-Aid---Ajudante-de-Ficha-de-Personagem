<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'nome_cla', 'descricao_cla', 'dado_vida',
    ];
}
