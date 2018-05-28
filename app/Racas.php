<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racas extends Model
{
    protected $fillable = [
        'nome_rac', 'descricao_rac', 'tracos_raciais', 'habilidade','val_hab','deslocamento',
    ];
}
