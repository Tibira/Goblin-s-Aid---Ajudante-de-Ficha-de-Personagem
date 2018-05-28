<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antecedentes extends Model
{
    protected $fillable = [
        'nome_ant', 'descricao_ant', 'itens_ant', 'pericias_ant','proficiencias_ant','idiomas_ant', 'carac_extras_ant',
    ];
}
