@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Proficiência</h2>
    @else 
    <h2> Alteração de Proficiência </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('proficiencias.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('proficiencias.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('proficiencias.update', $profic->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome_pro">Nome:</label>
                <input type="text" class="form-control" id="nome_pro" 
                       name="nome_pro" 
                       value="{{$profic->nome_pro or old('nome_pro')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao_pro">Descrição:</label>
                <input type="text" class="form-control" id="descricao_pro" 
                       name="descricao_pro" 
                       value="{{$profic->descricao_pro or old('descricao_pro')}}"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection