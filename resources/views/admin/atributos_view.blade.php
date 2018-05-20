@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-10'></div>
<div class='col-sm-2'>
    <a href="{{route('atributos.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
    <div>
        <div class='col-sm-12'>
            <h2> Detalhes da Arma</h2>
            <p><b>ID: </b> {{$atrib->id}}</p>
            <p><b>Força: </b> {{$atrib->forca}}</p>
            <p><b>Destreza: </b> {{$atrib->destreza}}</p>
            <p><b>Inteligência: </b> {{$atrib->inteligencia}}</p>
            <p><b>Sabedoria: </b> {{$atrib->sabedoria}}</p>
            <p><b>Constituição: </b> {{$atrib->constituicao}}</p>
            <p><b>Carisma: </b> {{$atrib->carisma}}</p>
            <p><b>Usuário: </b> {{$atrib->ficha_id}}</p>
        </div>
    </div>
@endsection
