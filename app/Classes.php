<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'nome_cla', 'descricao_cla', 'dado_vida', 'truques','nivel1','nivel2','nivel3','nivel4','nivel5','nivel6','nivel7','nivel8','nivel9',
    ];
}
