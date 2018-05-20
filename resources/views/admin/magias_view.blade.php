@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('magias.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Magia</h2>
            <p><b>ID: </b> {{$magia->id}}</p>
            <p><b>Nome: </b> {{$magia->nome_mag}}</p>
            <p><b>Descrição: </b> {{$magia->descricao_mag}}</p>
            <p><b>Conjuradores: </b> {{$magia->conjuradores_mag}}</p>
            <p><b>Nivel: </b> {{$magia->nivel_mag}}</p>
            <p><b>Escola: </b> {{$magia->escola_mag}}</p>
            <p><b>Tempo: </b> {{$magia->tempo_mag}}</p>
            <p><b>Componentes: </b> {{$magia->componentes_mag}}</p>
            <p><b>Alcance: </b> {{$magia->alcance_mag}}</p>
            <p><b>Duração: </b> {{$magia->duracao_mag}}</p>
            </div>
    </div>
@endsection
