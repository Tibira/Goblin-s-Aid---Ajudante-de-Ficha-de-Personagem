@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-2'>
    <a href='/' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Talentos</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Cod.</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Pré Requisitos</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($talento as $tal)
            <tr>
              <td>{{$tal->id}}</td>
              <td>{{$tal->nome_tal}}</td>
              <td>{{$tal->descricao_tal}}</td>
              <td>{{$tal->pre_requisito_tal}}</td>
              <td>
            
            <a href='{{route('talentos.show',$tal->id)}}'
               class='btn btn-info' 
               role='button'> Ver </a> 

            <a href='#'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="#"
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
