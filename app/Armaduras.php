<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armaduras extends Model
{
    protected $fillable = [
        'nome_armd', 'descricao_armd', 'preco_armd', 'peso_armd','class_armad','forca',
    ];
    
    protected $hidden = [
        'vis',
    ];
}
