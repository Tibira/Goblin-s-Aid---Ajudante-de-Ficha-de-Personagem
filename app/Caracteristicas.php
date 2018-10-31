<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'nivel','classe_id',
    ];
}
