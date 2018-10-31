<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pericias extends Model
{
    protected $fillable = [
        'nome', 'descricao',
    ];
}
