@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('antecedentes.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes do Antecedente</h2>
            <p><b>ID: </b> {{$antec->id}}</p>
            <p><b>Nome: </b> {{$antec->nome_ant}}</p>
            <p><b>Descrição: </b> {{$antec->descricao_ant}}</p>
            <p><b>Itens: </b> {{$antec->itens_ant}}</p>
            <p><b>Pericias: </b> {{$antec->pericias_ant}}</p>
            <p><b>Proficiencias: </b> {{$antec->proficiencias_ant}}</p>
            <p><b>Idiomas: </b> {{$antec->idiomas_ant}}</p>
            <p><b>Características Extras: </b> {{$antec->carac_extras_ant}}</p>
        </div>
    </div>
@endsection
