@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-11'>
    <h2> Detalhes do Antecedente</h2>
</div>
<div class='col-sm-1'>
    <a href="{{route('antecedentes.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <p><b>ID: </b> {{$antec->id}}</p>
            <p><b>Nome: </b> {{$antec->nome}}</p>
            <p><b>Descrição: </b> {{$antec->descricao}}</p>
            <p><b>Itens: </b> {{$antec->itens_ant}}</p>
            <p><b>Pericias: </b> {{$antec->pericias_ant}}</p>
            <p><b>Proficiencias: </b> {{$antec->proficiencias_ant}}</p>
            <p><b>Idiomas: </b> {{$antec->idiomas_ant}}</p>
            <p><b>Características Extras: </b> {{$antec->carac_extras_ant}}</p>
        </div>
    </div>
@endsection