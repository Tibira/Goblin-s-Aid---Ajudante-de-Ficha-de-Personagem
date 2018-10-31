<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armas extends Model
{
    protected $fillable = [
        'nome','descricao', 'tipo_arm', 'preco_arm', 'peso_arm','dano_arm','propiedade', 'efeito_adicional',
    ];
}
