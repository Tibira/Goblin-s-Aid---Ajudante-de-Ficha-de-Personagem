@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('pericias.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Proficiência</h2>
            <p><b>ID: </b> {{$profic->id}}</p>
            <p><b>Nome: </b> {{$profic->nome_pro}}</p>
            <p><b>Descrição: </b> {{$profic->descricao_pro}}</p>
            </div>
    </div>
@endsection
