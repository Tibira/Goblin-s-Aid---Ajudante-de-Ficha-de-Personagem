@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Definição</h2>
    @else 
    <h2> Alteração de Definição </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('definicoes.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('definicoes.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('definicoes.update', $defin->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="item">Item:</label>
                <input type="text" class="form-control" id="item" 
                       name="item" 
                       value="{{$defin->item or old('item')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="definicao">Definição:</label>
                <input type="text" class="form-control" id="definicao" 
                       name="definicao" 
                       value="{{$defin->definicao or old('definicao')}}"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection