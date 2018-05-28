@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Características</h2>
    @else 
    <h2> Alteração de Características </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('caracteristicas.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('caracteristicas.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('caracteristicas.update', $carac->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome_car">Nome:</label>
                <input type="text" class="form-control" id="nome_car" 
                       name="nome_car" 
                       value="{{$carac->nome_car or old('nome_car')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao_car">Descrição:</label>
                <input type="text" class="form-control" id="descricao_car" 
                       name="descricao_car" 
                       value="{{$carac->descricao_car or old('descricao_car')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="nivel">Nível Necessário:</label>
                <input type="text" class="form-control" id="nivel" 
                       name="nivel" 
                       value="{{$carac->nivel or old('nivel')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="classe_id">Classe:</label>
                <input type="text" class="form-control" id="classe_id" 
                       name="classe_id" 
                       value="{{$carac->classe_id or old('classe_id')}}"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection