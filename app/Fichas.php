<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichas extends Model
{
    protected $fillable = [
        'nome_per', 'tendencia','deslocamento','iniciativa',
        'classe_armadura','pontos_vida_total','pontos_vida_temporarios',
        'nivel','bon_proficiencia','experiencia','idiomas','forca',
        'destreza','inteligencia','sabedoria','carisma','constituicao',
        'tesouros','pcobre','pprata','peletron','pouro','pplatina',
        'truques','nivel1','nivel2','nivel3','nivel4','nivel5','nivel6','nivel7','nivel8','nivel9',
        'ligacoes','tracos_personal','ideal','defeito','cabelo','olhos','altura','pele','peso','aliados','historia'
    ];
    
    public function classe() {
        return $this->belongsTo('App\Classes');
    }
    public function raca() {
        return $this->belongsTo('App\Racas');
    }
    public function talentos() {
        return $this->belongsTo('App\Talentos');
    }
}
