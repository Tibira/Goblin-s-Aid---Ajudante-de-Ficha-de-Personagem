@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Item</h2>
    @else 
    <h2> Alteração de Item </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('itens.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('itens.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('itens.update', $itens->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome_itm">Nome:</label>
                <input type="text" class="form-control" id="nome_itm" 
                       name="nome_itm" 
                       value="{{$itens->nome_itm or old('nome_itm')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao_itm">Descrição:</label>
                <input type="text" class="form-control" id="descricao_itm" 
                       name="descricao_itm" 
                       value="{{$itens->descricao_itm or old('descricao_itm')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="preco_itm">Preço:</label>
                <input type="text" class="form-control" id="preco_itm" 
                       name="preco_itm" 
                       value="{{$itens->preco_itm or old('preco_itm')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="peso_itm">Peso(Kg):</label>
                <input type="text" class="form-control" id="peso_itm" 
                       name="peso_itm" 
                       value="{{$itens->peso_itm or old('peso_itm')}}"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection