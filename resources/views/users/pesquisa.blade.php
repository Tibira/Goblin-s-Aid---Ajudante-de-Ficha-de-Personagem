@extends('users.barra')

@section('conteudo')

<div class='col-sm-11'>
    <h2> Pesquisa </h2>
</div>

<form method="post" action="ficha.pesq">
    {{ csrf_field() }}

    <div class="col-sm-6">
        <div class="form-group">
            <label for="pergunta"> O que procura? </label>
            <input type="text" id="pergunta" name="pergunta" class="form-control">
        </div>
    </div>
    <div class="col-sm-1">
        <div class="form-group">
            <label> &nbsp; </label>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </div>
    </div>
</form>

@if (count($racas)==0)
<div class="col-sm-12">
    <div class="alert alert-success">
        Não achei nada, tem certeza que é isso que procura?
    </div>
</div>
@endif

<div class='col-sm-12'>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($racas as $perg) 
            <tr>
                <td> {{$perg->nome}} </td>
                <td> {{$perg->descricao}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>

@endsection