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
          <th>Descrição</th>
          <th>Preco</th>
          <th>Peso(Kg)</th>
          <th>Classe de Armadura</th>
          <th>Força</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($armad as $armd)
            <tr>
              <td>{{$armd->id}}</td>
              <td>{{$armd->nome_armd}}</td>
              <td>{{$armd->descricao_armd}}</td>
              <td>{{$armd->preco_armd}}</td>
              <td>{{$armd->peso_armd}}</td>
              <td>{{$armd->class_armad}}</td>
              <td>{{$armd->forca}}</td>
              <td>
            
            <a href='{{route('armaduras.show',$armd->id)}}'
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
