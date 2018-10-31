<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armaduras extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'preco_armd', 'peso_armd','class_armad','forca',
    ];
}
