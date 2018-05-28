@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('definicoes.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes</h2>
            <p><b>ID: </b> {{$defin->id}}</p>
            <p><b>Item: </b> {{$defin->item}}</p>
            <p><b>Definição: </b> {{$defin->definicao}}</p>
        </div>
    </div>
@endsection
