@extends('adminlte::page')

@section('content_header')
   
<div class='col-sm-2'>
    <a href='/' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Itens</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Cód.</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th>Peso(Kg)</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($itens as $itm)
            <tr>
              <td>{{$itm->id}}</td>
              <td>{{$itm->nome_itm}}</td>
              <td>{{$itm->descricao_itm}}</td>
              <td>{{$itm->preco_itm}}</td>
              <td>{{$itm->peso_itm}}</td>
              <td>
            
            <a href='{{route('itens.show',$itm->id)}}'
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
