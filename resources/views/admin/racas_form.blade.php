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
    <a href="{{route('racas.index')}}" class='btn btn-primary' 
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
    <form method="post" action="{{route('racas.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('racas.update', $racas->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome_rac">Nome:</label>
                <input type="text" class="form-control" id="nome_rac" 
                       name="nome_rac" 
                       value="{{$racas->nome_rac or old('nome_rac')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="descricao_rac">Descrição:</label>
                <input type="text" class="form-control" id="descricao_rac" 
                       name="descricao_rac" 
                       value="{{$racas->descricao_rac or old('descricao_rac')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="tracos_raciais">Traços Raciais:</label>
                <input type="text" class="form-control" id="tracos_raciais" 
                       name="tracos_raciais" 
                       value="{{$racas->tracos_raciais or old('tracos_raciais')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="habilidade">Habilidade:</label>
                <input type="text" class="form-control" id="habilidade" 
                       name="habilidade" 
                       value="{{$racas->habilidade or old('habilidade')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="val_hab">Valor de Habilidade:</label>
                <input type="text" class="form-control" id="val_hab" 
                       name="val_hab" 
                       value="{{$racas->val_hab or old('val_hab')}}"
                       required>
            </div>
            <div class="form-group">
                <label for="deslocamento">Deslocamento:</label>
                <input type="text" class="form-control" id="deslocamento" 
                       name="deslocamento" 
                       value="{{$racas->deslocamento or old('deslocamento')}}"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
        @endsection