@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Perícia</h2>
    @else 
    <h2> Alteração de Perícia </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('pericias.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('pericias.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('pericias.update', $peric->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome_per">Nome:</label>
                <input type="text" class="form-control" id="nome_per" 
                       name="nome_per" 
                       value="{{$peric->nome_per or old('nome_per')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao_per">Descrição:</label>
                <input type="text" class="form-control" id="descricao_per" 
                       name="descricao_per" 
                       value="{{$peric->descricao_per or old('descricao_per')}}"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection