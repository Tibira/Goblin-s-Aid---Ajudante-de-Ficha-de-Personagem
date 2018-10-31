<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proficiencias extends Model
{
    protected $fillable = [
        'nome', 'descricao',
    ];
}
