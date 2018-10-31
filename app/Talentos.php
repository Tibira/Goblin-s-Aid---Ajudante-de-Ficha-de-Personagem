<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talentos extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'pre_requisito_tal',
    ];
}
