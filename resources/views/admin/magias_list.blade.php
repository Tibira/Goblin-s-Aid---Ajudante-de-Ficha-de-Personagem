@extends('adminlte::page')

@section('content_header')
  
<div class='col-sm-2'>
    <a href='{{route('magias.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Magias</h2>
    </div>
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Conjuradores</th>
          <th>Nivel</th>
          <th>Escola</th>
          <th>Tempo</th>
          <th>Componentes</th>
          <th>Alcance</th>
          <th>Duração</th>
          <th width="200px">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($magias as $mag)
            <tr>
              <td>{{$mag->nome_mag}}</td>
              <td>{{$mag->descricao_mag}}</td>
              <td>{{$mag->conjuradores_mag}}</td>
              <td>{{$mag->nivel_mag}}</td>
              <td>{{$mag->escola_mag}}</td>
              <td>{{$mag->tempo_mag}}</td>
              <td>{{$mag->componentes_mag}}</td>
              <td>{{$mag->alcance_mag}}</td>
              <td>{{$mag->duracao_mag}}</td>
              <td>
            
            <a href='{{route('magias.show',$mag->id)}}'
               class='btn btn-info' 
               role='button'> Ver </a> 

            <a href='{{route('magias.edit',$mag->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('magias.destroy', $mag->id)}}"
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
