@extends('adminlte::page')

@section('content_header')
<body>
    <div class="content-warpper" style="min-height: 540px;">
        <section class="content">
            <div class='col-sm-11'>
                <h2>Antecedentes</h2>
            </div>
            <div class='col-sm-1'>
                <a href="{{route('antecedentes.create')}}" class='btn btn-primary' role='button'> Novo </a>
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
                        @foreach ($antec as $ant)
                        <tr>
                            <td>{{$ant->nome}}</td>
                            <td>{{$ant->descricao}}</td>
                            <td>
                            <a href="{{route('antecedentes.show',$ant->id)}}"
                                class='btn btn-info' 
                                role='button'> Detalhes </a> 
                            <a href="{{route('antecedentes.edit',$ant->id)}}"
                                class='btn btn-warning' 
                                role='button'> Alterar </a> 
                            <form style="display: inline-block" method="post"
                                action="{{route('antecedentes.destroy',$ant->id)}}"
                                onsubmit="return confirm('Confirma Exclusão?')">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger"> Deletar </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $antec->links() }}
        </section>
    </div>
</body>
@stop
