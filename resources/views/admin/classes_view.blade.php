@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('classes.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Classe</h2>
            <p><b>ID: </b> {{$class->id}}</p>
            <p><b>Nome: </b> {{$class->nome_cla}}</p>
            <p><b>Descrição: </b> {{$class->descricao_cla}}</p>
            <p><b>Dado de vida: </b> {{$class->dado_vida}}</p>
            <p><b>Truques: </b> {{$class->truque}}</p>
            <p><b>Magias de Nível 1: </b> {{$class->nivel1}}</p>
            <p><b>Magias de Nível 2: </b> {{$class->nivel2}}</p>
            <p><b>Magias de Nível 3: </b> {{$class->nivel3}}</p>
            <p><b>Magias de Nível 4: </b> {{$class->nivel4}}</p>
            <p><b>Magias de Nível 5: </b> {{$class->nivel5}}</p>
            <p><b>Magias de Nível 6: </b> {{$class->nivel6}}</p>
            <p><b>Magias de Nível 7: </b> {{$class->nivel7}}</p>
            <p><b>Magias de Nível 8: </b> {{$class->nivel8}}</p>
            <p><b>Magias de Nível 9: </b> {{$class->nivel9}}</p>
            </div>
    </div>
@endsection
