@extends('adminlte::page')

@section('content_header')
   
<div class='col-sm-2'>
    <a href='/' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Armaduras</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Cód.</th>
          <th>Nome</th>
          <th>Tipo</th>
          <th>Preco</th>
          <th>Peso(Kg)</th>
          <th>Dano</th>
          <th>Propiedade</th>
          <th>Efeito Adicional</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($arma as $arm)
            <tr>
              <td>{{$arm->id}}</td>
              <td>{{$arm->nome_arm}}</td>
              <td>{{$arm->tipo_arm}}</td>
              <td>{{$arm->preco_arm}}</td>
              <td>{{$arm->peso_arm}}</td>
              <td>{{$arm->dano_arm}}</td>
              <td>{{$arm->propiedade}}</td>
              <td>{{$arm->efeito_adicional}}</td>
              <td>
            
            <a href='{{route('armas.show',$arm->id)}}'
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
