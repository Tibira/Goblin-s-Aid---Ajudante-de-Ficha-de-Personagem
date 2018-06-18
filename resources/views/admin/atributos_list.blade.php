@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-11'>
        <h2>Atributos</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Força</th>
          <th>Destreza</th>
          <th>Inteligência</th>
          <th>Sabedoria</th>
          <th>Constituição</th>
          <th>Carisma</th>
          <th>ID da Ficha</th>
          <th width="90px">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($atrib as $atr)
            <tr>
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
               role='button'> Detalhes </a> 
            </td>

              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop   