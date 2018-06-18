@extends('adminlte::page')

@section('content_header')
  
<div class='col-sm-2'>
    <a href='{{route('magias.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Magias</h2>
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
            @foreach ($magias as $mag)
            <tr>
              <td>{{$mag->nome_mag}}</td>
              <td>{{$mag->descricao_mag}}</td>
              <td>
            
            <a href='{{route('magias.show',$mag->id)}}'
               class='btn btn-info' 
               role='button'> Detalhes </a> 

            <a href='{{route('magias.edit',$mag->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('magias.destroy', $mag->id)}}"
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
