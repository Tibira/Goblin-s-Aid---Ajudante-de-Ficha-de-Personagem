@extends('adminlte::page')

@section('content_header')
<div class='col-sm-2'>
    <a href='{{route('talentos.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Talentos</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th width="200px">Nome</th>
          <th>Descrição</th>
          <th width="235px">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($talento as $tal)
            <tr>
              <td>{{$tal->nome}}</td>
              <td>{{$tal->descricao}}</td>
              <td>
            
            <a href='{{route('talentos.show',$tal->id)}}'
               class='btn btn-info' 
               role='button'> Detalhes </a> 

            <a href='{{route('talentos.edit',$tal->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('talentos.destroy',$tal->id)}}"
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
