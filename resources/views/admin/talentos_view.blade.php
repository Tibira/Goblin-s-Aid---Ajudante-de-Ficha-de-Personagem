@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('talentos.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes do Talento</h2>
            <p><b>ID: </b> {{$talento->id}}</p>
            <p><b>Nome: </b> {{$talento->nome_tal}}</p>
            <p><b>Descrição: </b> {{$talento->descricao_tal}}</p>
            <p><b>Traços Raciais: </b> {{$talento->pre_requisito_tal}}</p>
            </div>
    </div>
@endsection
