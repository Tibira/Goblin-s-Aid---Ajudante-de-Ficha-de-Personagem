@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-2'>
    <a href='/' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Raças</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Cod.</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Traços Raciais</th>
          <th>Habilidade</th>
          <th>Valor de Hablidade</th>
          <th>Deslocamento</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($racas as $rac)
            <tr>
              <td>{{$rac->id}}</td>
              <td>{{$rac->nome_rac}}</td>
              <td>{{$rac->descricao_rac}}</td>
              <td>{{$rac->tracos_raciais}}</td>
              <td>{{$rac->habilidade}}</td>
              <td>{{$rac->val_hab}}</td>
              <td>{{$rac->deslocamento}}</td>
              <td>
            
            <a href='{{route('racas.show',$rac->id)}}'
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