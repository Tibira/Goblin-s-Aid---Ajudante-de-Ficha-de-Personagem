@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Classe</h2>
    @else 
    <h2> Alteração de Classe </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('classes.index')}}" class='btn btn-primary' 
       role='button'> Voltar </a>
</div>
<div class="col-sm-12">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif    
</div>
<div class='col-sm-12'>
    @if ($opc == 1)
    <form method="post" action="{{route('classes.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('classes.update', $classes->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome_cla">Nome:</label>
                <input type="text" class="form-control" id="nome_cla" 
                       name="nome_cla" 
                       value="{{$classes->nome_cla or old('nome_cla')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao_cla">Descrição:</label>
                <input type="text" class="form-control" id="descricao_cla" 
                       name="descricao_cla" 
                       value="{{$classes->descricao_cla or old('descricao_cla')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="dado_vida">Dado de Vida:</label>
                <input type="text" class="form-control" id="dado_vida" 
                       name="dado_vida" 
                       value="{{$classes->dado_vida or old('dado_vida')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="truques">Truques:</label>
                <input type="text" class="form-control" id="truques" 
                       name="truques" 
                       value="{{$classes->truques or old('truques')}}">
            </div>
            <div class="form-group">
                <label for="nivel1">Nivel 1:</label>
                <input type="text" class="form-control" id="nivel1" 
                       name="nivel1" 
                       value="{{$classes->nivel1 or old('nivel1')}}">
            </div>
            <div class="form-group">
                <label for="nivel2">Nivel 2:</label>
                <input type="text" class="form-control" id="nivel2" 
                       name="nivel2" 
                       value="{{$classes->nivel2 or old('nivel2')}}">
            </div>
            <div class="form-group">
                <label for="nivel3">Nivel 3:</label>
                <input type="text" class="form-control" id="nivel3" 
                       name="nivel3" 
                       value="{{$classes->nivel3 or old('nivel3')}}">
            </div>
            <div class="form-group">
                <label for="nivel4">Nivel 4:</label>
                <input type="text" class="form-control" id="nivel4" 
                       name="nivel4" 
                       value="{{$classes->nivel4 or old('nivel4')}}">
            </div>
            <div class="form-group">
                <label for="nivel5">Nivel 5:</label>
                <input type="text" class="form-control" id="nivel5" 
                       name="nivel5" 
                       value="{{$classes->nivel5 or old('nivel5')}}">
            </div>
            <div class="form-group">
                <label for="nivel6">Nivel 6:</label>
                <input type="text" class="form-control" id="nivel6" 
                       name="nivel6" 
                       value="{{$classes->nivel6 or old('nivel6')}}">
            </div>
            <div class="form-group">
                <label for="nivel7">Nivel 7:</label>
                <input type="text" class="form-control" id="nivel7" 
                       name="nivel7" 
                       value="{{$classes->nivel7 or old('nivel7')}}">
            </div>
            <div class="form-group">
                <label for="nivel8">Nivel 8:</label>
                <input type="text" class="form-control" id="nivel8" 
                       name="nivel8" 
                       value="{{$classes->nivel8 or old('nivel8')}}">
            </div>
            <div class="form-group">
                <label for="nivel9">Nivel 9:</label>
                <input type="text" class="form-control" id="nivel9" 
                       name="nivel9" 
                       value="{{$classes->nivel9 or old('nivel9')}}">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection