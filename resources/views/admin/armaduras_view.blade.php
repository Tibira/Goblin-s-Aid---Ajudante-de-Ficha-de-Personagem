@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('armaduras.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Armadura</h2>
            <p><b>ID: </b> {{$armad->id}}</p>
            <p><b>Nome: </b> {{$armad->nome_armd}}</p>
            <p><b>Descrição: </b> {{$armad->descricao_armd}}</p>
            <p><b>Preço: </b> {{$armad->preco_armd}}</p>
            <p><b>Peso(Kg): </b> {{$armad->peso_armd}}</p>
            <p><b>Classe de Armadura: </b> {{$armad->class_armad}}</p>
            <p><b>Força: </b> {{$armad->forca}}</p>
        </div>
    </div>
@endsection
