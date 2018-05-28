@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-2'>
    <a href='{{route('definicoes.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
       </div>
<div class='col-sm-11'>
        <h2>Definições</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Item</th>
          <th>Definição</th>
          <th width="200px">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($def as $defin)
            <tr>
              <td>{{$defin->item}}</td>
              <td>{{$defin->definicao}}</td>
              <td>
            
            <a href='{{route('definicoes.show',$defin->id)}}'
               class='btn btn-info' 
               role='button'> Ver </a> 

            <a href='{{route('definicoes.edit',$defin->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('definicoes.destroy',$defin->id)}}"
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
