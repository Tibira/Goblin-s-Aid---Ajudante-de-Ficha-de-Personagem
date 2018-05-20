<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armas extends Model
{
    protected $fillable = [
        'nome_arm', 'tipo_arm', 'preco_arm', 'peso_arm','dano_arma','propiedade', 'efeito_adicional',
    ];

    protected $hidden = [
        'vis',
    ];
}
