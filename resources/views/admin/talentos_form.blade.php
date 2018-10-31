@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Raça</h2>
    @else 
    <h2> Alteração de Raça </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('talentos.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('talentos.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('talentos.update', $talentos->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" 
                       name="nome" 
                       value="{{$talentos->nome or old('nome')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" 
                       name="descricao" 
                       value="{{$talentos->descricao or old('descricao')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="pre_requisito_tal">Pré-Requisito</label>
                <input type="text" class="form-control" id="pre_requisito_tal" 
                       name="pre_requisito_tal" 
                       value="{{$talentos->pre_requisito_tal or old('pre_requisito_tal')}}"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection