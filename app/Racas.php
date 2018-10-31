<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racas extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'tracos_raciais', 'habilidade','val_hab','deslocamento',
    ];
}
