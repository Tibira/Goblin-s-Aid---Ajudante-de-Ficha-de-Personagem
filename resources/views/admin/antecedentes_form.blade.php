@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    @if ($opc == 1)
    <h2> Cadastro de Antecedente </h2>
    @else 
    <h2> Alteração de Antecedente </h2>
    @endif
</div>
<div class='col-sm-1'>
    <a href="{{route('antecedentes.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('antecedentes.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('antecedentes.update', $antec->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="col-sm-12">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" 
                       name="nome" 
                       value="{{$antec->nome or old('nome')}}">
            </div>
            <div class="col-sm-12">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" 
                       name="descricao" 
                       value="{{$antec->descricao or old('descricao')}}">
            </div>
            <div class="col-sm-12">
                <label for="itens_ant">Itens:</label>
                <input type="text" class="form-control" id="itens_ant" 
                       name="itens_ant" 
                       value="{{$antec->itens_ant or old('itens_ant')}}">
            </div>
            <div class="col-sm-12">
                <label for="pericias_ant">Pericias:</label>
                <input type="text" class="form-control" id="pericias_ant" 
                       name="pericias_ant" 
                       value="{{$antec->pericias_ant or old('pericias_ant')}}">
            </div>
            <div class="col-sm-12">
                <label for="proficiencias_ant">Proficiencias:</label>
                <input type="text" class="form-control" id="proficiencias_ant" 
                       name="proficiencias_ant" 
                       value="{{$antec->proficiencias_ant or old('proficiencias_ant')}}">
            </div>
            <div class="col-sm-12">
                <label for="idiomas_ant">Idiomas:</label>
                <input type="text" class="form-control" id="idiomas_ant" 
                       name="idiomas_ant" 
                       value="{{$antec->idiomas_ant or old('idiomas_ant')}}">
            </div>
            <div class="col-sm-12">
                <label for="carac_extras_ant">Caracteristicas Extras:</label>
                <input type="text" class="form-control" id="carac_extras_ant" 
                       name="carac_extras_ant" 
                       value="{{$antec->carac_extras_ant or old('carac_extras_ant')}}">
            </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>  
        </form>
        @endsection