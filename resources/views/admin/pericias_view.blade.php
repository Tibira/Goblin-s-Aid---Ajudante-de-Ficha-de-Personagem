@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('pericias.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Pericia</h2>
            <p><b>ID: </b> {{$peric->id}}</p>
            <p><b>Nome: </b> {{$peric->nome_per}}</p>
            <p><b>Descrição: </b> {{$peric->descricao_per}}</p>
            </div>
    </div>
@endsection
