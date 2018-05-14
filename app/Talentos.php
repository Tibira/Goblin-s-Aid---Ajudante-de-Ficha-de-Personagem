<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talentos extends Model
{
    protected $fillable = [
        'nome_tal', 'descricao_tal', 'pre_requisito_tal',
    ];
}
