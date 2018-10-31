@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('classes.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Classe</h2>
            <p><b>ID: </b> {{$class->id}}</p>
            <p><b>Nome: </b> {{$class->nome}}</p>
            <p><b>Descrição: </b> {{$class->descricao}}</p>
            <p><b>Dado de vida: </b> {{$class->dado_vida}}</p>
            </div>
    </div>
@endsection
