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
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" 
                       name="nome" 
                       value="{{$classes->nome or old('nome')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" 
                       name="descricao" 
                       value="{{$classes->descricao or old('descricao')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="dado_vida">Dado de Vida:</label>
                <input type="text" class="form-control" id="dado_vida" 
                       name="dado_vida" 
                       value="{{$classes->dado_vida or old('dado_vida')}}"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection