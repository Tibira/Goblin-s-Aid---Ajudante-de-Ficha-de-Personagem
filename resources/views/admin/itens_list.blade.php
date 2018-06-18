@extends('adminlte::page')

@section('content_header')
   
<div class='col-sm-2'>
    <a href='{{route('itens.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Itens</h2>
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
            @foreach ($itens as $itm)
            <tr>
              <td>{{$itm->nome_itm}}</td>
              <td>{{$itm->descricao_itm}}</td>
              <td>
            
            <a href='{{route('itens.show',$itm->id)}}'
               class='btn btn-info' 
               role='button'> Detalhes </a> 

            <a href='{{route('itens.edit',$itm->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('itens.destroy',$itm->id)}}"
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
