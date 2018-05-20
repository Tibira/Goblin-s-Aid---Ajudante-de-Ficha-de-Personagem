@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('caracteristicas.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Caracteristica</h2>
            <p><b>ID: </b> {{$carac->id}}</p>
            <p><b>Nome: </b> {{$carac->nome_car}}</p>
            <p><b>Descrição: </b> {{$carac->descricao_car}}</p>
            <p><b>Nivel: </b> {{$carac->nivel}}</p>
            <p><b>ID da classe: </b> {{$carac->classe_id}}</p>
            </div>
    </div>
@endsection
