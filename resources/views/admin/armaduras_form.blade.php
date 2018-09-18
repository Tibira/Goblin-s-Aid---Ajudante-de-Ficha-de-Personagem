@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Armadura</h2>
    @else 
    <h2> Alteração de Armadura </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('armaduras.index')}}" class='btn btn-primary' 
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
<div class='box-body'>
    @if ($opc == 1)
    <form method="post" action="{{route('armaduras.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('armaduras.update', $armad->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}
            <div class="col-sm-12">
                <label for="nome_armd">Nome:</label>
                <input type="text" class="form-control" id="nome_armd" 
                       name="nome_armd" 
                       value="{{$armad->nome_armd or old('nome_armd')}}"
                       required>
            </div>
            <div class="col-sm-12">
                <label for="descricao_armd">Descrição:</label>
                <input type="text" class="form-control" id="descricao_armd" 
                       name="descricao_armd" 
                       value="{{$armad->descricao_armd or old('descricao_armd')}}"
                       required>
            </div>
            <div class="col-sm-6">
                <label for="preco_armd">Preço:</label>
                <input type="text" class="form-control" id="preco_armd" 
                       name="preco_armd" 
                       value="{{$armad->preco_armd or old('preco_armd')}}"
                       required>
            </div>
            <div class="col-sm-6">
                <label for="peso_armd">Peso(Kg):</label>
                <input type="text" class="form-control" id="peso_armd" 
                       name="peso_armd" 
                       value="{{$armad->peso_armd or old('peso_armd')}}"
                       required>
            </div>
            <div class="col-sm-6">
                <label for="class_armad">Classe de Armadura:</label>
                <input type="text" class="form-control" id="class_armad" 
                       name="class_armad" 
                       value="{{$armad->class_armad or old('class_armad')}}"
                       required>
            </div>
            <div class="col-sm-6">
                <label for="forca">Força:</label>
                <input type="text" class="form-control" id="forca" 
                       name="forca" 
                       value="{{$armad->forca or old('forca')}}">
            </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection