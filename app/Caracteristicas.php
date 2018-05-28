<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
    protected $fillable = [
        'nome_car', 'descricao_car', 'nivel','classe_id',
    ];
}
