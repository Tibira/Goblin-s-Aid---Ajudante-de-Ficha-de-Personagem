@extends('users.barra')

@section('conteudo')

<div class='col-sm-11'>
    <h2> Pesquisa </h2>
</div>

<form method="post" action="{{URL::to('/pesquisa')}}" role="pesquisa">
    {{ csrf_field() }}

    <div class="col-sm-6">
        <div class="form-group">
            <label for="pesquisa"> Palavra-chave: </label>
            <input type="text" id="pesquisa" name="pesquisa" class="form-control">
        </div>
    </div>
    <div class="col-sm-1">
        <div class="form-group">
            <label> &nbsp; </label>
            <button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></button>
        </div>
    </div>
</form>

@if (isset($details))
<h1>Encontrei algo!</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th width="170px">Nome</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach($details as $info)
        <tr>
        <th>{{$info->nome}}</th>
        <th>{{$info->descricao}}</th>
        </tr>
        @endforeach
    </tbody>
</table>
@elseif(isset($mensagem))
<p>{{$mensagem}}</p>
@endif

@endsection