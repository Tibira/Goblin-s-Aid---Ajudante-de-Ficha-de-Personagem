@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'>
    <h2> Detalhes da Arma</h2>
</div>
<div class='col-sm-2'>
    <a href="{{route('armas.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <p><b>ID: </b> {{$arma->id}}</p>
<<<<<<< HEAD
            <p><b>Nome: </b> {{$arma->nome_arm}}</p>
            <p><b>Descrição: </b> {{$arma->descricao_arm}}</p>
            <p><b>Tipo: </b> {{$arma->tipo_arm}}</p>
=======
            <p><b>Nome: </b> {{$arma->nome}}</p>
            <p><b>Descrição: </b> {{$arma->descricao}}</p>
>>>>>>> local
            <p><b>Preço: </b> {{$arma->preco_arm}}</p>
            <p><b>Peso(Kg): </b> {{$arma->peso_arm}}</p>
            <p><b>Dano: </b> {{$arma->dano_arm}}</p>
            <p><b>Propiedade: </b> {{$arma->propiedade}}</p>
            <p><b>Efeito Adicional: </b> {{$arma->efeito_adicional}}</p>
        </div>
    </div>
@endsection
