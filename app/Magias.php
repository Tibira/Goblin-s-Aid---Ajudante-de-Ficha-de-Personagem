<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magias extends Model
{
    protected $fillable = [
        'nome_mag', 'descricao_mag', 'conjuradores_mag','nivel_mag','escola_mag','tempo_mag','componentes_mag','alcance_mag','duracao_mag',
    ];
}
