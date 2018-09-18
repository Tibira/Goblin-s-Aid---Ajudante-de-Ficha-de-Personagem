@extends('adminlte::page')
@section('content_header')
<div class='col-sm-11'>
    <h2> Ficha </h2>
</div>
<div class='col-sm-1'>
    <a href="{{route('users.index')}}" class='btn btn-primary' 
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
        <form method="post" action="{{route('ficha.update', $ficha->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            {{ csrf_field() }}
        <div class="col-sm-12">
                <label for="nome_per">Nome:</label>
                <input type="text" class="form-control" id="nome_per" 
                       name="nome_per" 
                       value="{{$ficha->nome_per or old('nome_per')}}"
                       required>
            </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>     
            </div>  
        </form>
        @endsection