@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Magia </h2>
    @else 
    <h2> Alteração de Magia </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('magias.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('magias.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('magias.update', $magia->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome_mag">Nome:</label>
                <input type="text" class="form-control" id="nome_mag" 
                       name="nome_mag" 
                       value="{{$magia->nome_mag or old('nome_mag')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao_mag">Descrição:</label>
                <input type="text" class="form-control" id="descricao_mag" 
                       name="descricao_mag" 
                       value="{{$magia->descricao_mag or old('descricao_mag')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="conjuradores_mag">Conjuradores:</label>
                <input type="text" class="form-control" id="conjuradores_mag" 
                       name="conjuradores_mag" 
                       value="{{$magia->conjuradores_mag or old('conjuradores_mag')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="nivel_mag">Nivel:</label>
                <input type="text" class="form-control" id="nivel_mag" 
                       name="nivel_mag" 
                       value="{{$magia->nivel_mag or old('nivel_mag')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="escola_mag">Escola:</label>
                <input type="text" class="form-control" id="escola_mag" 
                       name="escola_mag" 
                       value="{{$magia->escola_mag or old('escola_mag')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="tempo_mag">Tempo:</label>
                <input type="text" class="form-control" id="tempo_mag" 
                       name="tempo_mag" 
                       value="{{$magia->tempo_mag or old('tempo_mag')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="componentes_mag">Componentes:</label>
                <input type="text" class="form-control" id="componentes_mag" 
                       name="componentes_mag" 
                       value="{{$magia->componentes_mag or old('componentes_mag')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="alcance_mag">Alcance:</label>
                <input type="text" class="form-control" id="alcance_mag" 
                       name="alcance_mag" 
                       value="{{$magia->alcance_mag or old('alcance_mag')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="duracao_mag">Duração:</label>
                <input type="text" class="form-control" id="duracao_mag" 
                       name="duracao_mag" 
                       value="{{$magia->duracao_mag or old('duracao_mag')}}"
                       required>
            </div>
            <div class="form-group">
            <label for="vis">Combustível:</label>
            <select class="form-control" id="vis" name="vis">
                <option value="Visivel" 
@if ((isset($reg) && $reg->vis=="1") 
     or old('vis') == "1") selected @endif>
                        1</option>
                <option value="Invisivel"
@if ((isset($reg) && $reg->vis=="0") 
     or old('vis') == "0") selected @endif>                        
                        0</option>
            </select>
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection