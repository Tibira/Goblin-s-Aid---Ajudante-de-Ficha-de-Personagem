@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-2'>
    <a href='/' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Atributos</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Cod.</th>
          <th>Força</th>
          <th>Destreza</th>
          <th>Inteligência</th>
          <th>Sabedoria</th>
          <th>Constituição</th>
          <th>Carisma</th>
          <th>Usuário</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($atrib as $atr)
            <tr>
              <td>{{$atr->id}}</td>
              <td>{{$atr->forca}}</td>
              <td>{{$atr->destreza}}</td>
              <td>{{$atr->inteligencia}}</td>
              <td>{{$atr->sabedoria}}</td>
              <td>{{$atr->constituicao}}</td>
              <td>{{$atr->carisma}}</td>
              <td>{{$atr->ficha_id}}</td>
              <td>
            
            <a href='{{route('atributos.show',$atr->id)}}'
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