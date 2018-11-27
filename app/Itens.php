<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'preco_itm', 'peso_itm',
    ];
}
