@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-2'>
    <a href='{{route('armaduras.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Armaduras</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th width="200px">Nome</th>
          <th>Descrição</th>
          <th width="200px">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($armad as $armd)
            <tr>
              <td>{{$armd->nome_armd}}</td>
              <td>{{$armd->descricao_armd}}</td>
              <td>
            
            <a href='{{route('armaduras.show',$armd->id)}}'
               class='btn btn-info' 
               role='button'> Ver </a> 

            <a href='{{route('armaduras.edit',$armd->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('armaduras.destroy',$armd->id)}}"
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
