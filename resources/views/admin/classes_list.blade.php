@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-2'>
    <a href='{{route('classes.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Classes</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Dado de Vida</th>
          <th>Truques</th>
          <th>Nivel 1</th>
          <th>Nivel 2</th>
          <th>Nivel 3</th>
          <th>Nivel 4</th>
          <th>Nivel 5</th>
          <th>Nivel 6</th>
          <th>Nivel 7</th>
          <th>Nivel 8</th>
          <th>Nivel 9</th>
          <th width="200px">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($classes as $classe)
            <tr>
              <td>{{$classe->nome_cla}}</td>
              <td>{{$classe->descricao_cla}}</td>
              <td>{{$classe->dado_vida}}</td>
              <td>{{$classe->truques}}</td>
              <td>{{$classe->nivel1}}</td>
              <td>{{$classe->nivel2}}</td>
              <td>{{$classe->nivel3}}</td>
              <td>{{$classe->nivel4}}</td>
              <td>{{$classe->nivel5}}</td>
              <td>{{$classe->nivel6}}</td>
              <td>{{$classe->nivel7}}</td>
              <td>{{$classe->nivel8}}</td>
              <td>{{$classe->nivel9}}</td>
              <td>
            
            <a href='{{route('classes.show',$classe->id)}}'
               class='btn btn-info' 
               role='button'> Ver </a> 

            <a href='{{route('classes.edit',$classe->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('classes.destroy',$classe->id)}}"
                  onsubmit="return confirm('Confirma Exclusão?')">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <button type="submit"
                        class="btn btn-danger"> Deletar </button>
            </form>
            </td>

              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop   
