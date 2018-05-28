<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    protected $fillable = [
        'nome_itm', 'descricao_itm', 'preco_itm', 'peso_itm',
    ];
}
