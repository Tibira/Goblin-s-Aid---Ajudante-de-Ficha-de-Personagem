@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-2'>
    <a href='{{route('antecedentes.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
</div>
<div class='col-sm-11'>
        <h2>Antecedentes</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Itens</th>
          <th>Pericias</th>
          <th>Proficiencias</th>
          <th>Idiomas</th>
          <th>Caracteristicas Extras</th>
          <th width="200px">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($antec as $ant)
            <tr>
              <td>{{$ant->nome_ant}}</td>
              <td>{{$ant->descricao_ant}}</td>
              <td>{{$ant->itens_ant}}</td>
              <td>{{$ant->pericias_ant}}</td>
              <td>{{$ant->proficiencias_ant}}</td>
              <td>{{$ant->idiomas_ant}}</td>
              <td>{{$ant->carac_extras_ant}}</td>
              <td>
            
            <a href='{{route('antecedentes.show',$ant->id)}}'
               class='btn btn-info' 
               role='button'> Ver </a> 

            <a href='{{route('antecedentes.edit',$ant->id)}}'
               class='btn btn-warning' 
               role='button'> Alterar </a> 

            <form style="display: inline-block"
                  method="post"
                  action="{{route('antecedentes.destroy',$ant->id)}}"
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
