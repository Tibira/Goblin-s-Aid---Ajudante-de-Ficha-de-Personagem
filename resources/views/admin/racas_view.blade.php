@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('racas.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Raça</h2>
            <p><b>ID: </b> {{$raca->id}}</p>
            <p><b>Nome: </b> {{$raca->nome_rac}}</p>
            <p><b>Descrição: </b> {{$raca->descricao_rac}}</p>
            <p><b>Traços Raciais: </b> {{$raca->tracos_raciais}}</p>
            <p><b>Habilidade: </b> {{$raca->habilidade}}</p>
            <p><b>Valor de Habilidade: </b> {{$raca->val_hab}}</p>
            <p><b>Deslocamento: </b> {{$raca->deslocamento}}</p>
            </div>
    </div>
@endsection
