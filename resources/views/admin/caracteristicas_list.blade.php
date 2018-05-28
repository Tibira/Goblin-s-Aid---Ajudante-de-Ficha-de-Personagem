@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-2'>
    <a href='{{route('caracteristicas.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Características</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Nivel</th>
          <th>Classe</th>
          <th width="200px">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($carac as $car)
            <tr>
              <td>{{$car->nome_car}}</td>
              <td>{{$car->descricao_car}}</td>
              <td>{{$car->nivel}}</td>
              <td>{{$car->classe_id}}</td>
              <td>
            
            <a href='{{route('caracteristicas.show',$car->id)}}'
               class='btn btn-info' 
               role='button'> Ver </a> 

            <a href='{{route('caracteristicas.edit',$car->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('caracteristicas.destroy',$car->id)}}"
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