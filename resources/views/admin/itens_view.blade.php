@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('itens.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes do Item</h2>
            <p><b>ID: </b> {{$itens->id}}</p>
            <p><b>Nome: </b> {{$itens->nome_itm}}</p>
            <p><b>Descrição: </b> {{$itens->descricao_itm}}</p>
            <p><b>Preço: </b> {{$itens->preco_itm}}</p>
            <p><b>Peso(Kg): </b> {{$itens->peso_itm}}</p>
            </div>
    </div>
@endsection
