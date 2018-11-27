@extends('users.barra')

@section('conteudo')

    <style>
.divmargin {
    margin-top: 20px;
    margin-bottom: 40px;
    margin-right: 20px;
    margin-left: 20px;
}
</style>
<body>
<div class="divmargin">
    <div class="content-warpper" style="min-height: 540px;">
        <section class="content">
        @if($fichas->isEmpty())
                        <h1>Você não tem nenhuma ficha... ainda!</h1>
                        <h2>&nbsp↓ Crie uma ficha :)</h2>
                        <div class='col-sm-1'>
                            <a href="{{route('ficha.create')}}" class='btn btn-primary' role='button'> Nova Ficha </a>
                        </div>
                    @else
            <div class='col-sm-11'>
                <h2>Fichas</h2>
            </div>
            <div class='col-sm-1'>
                <a href="{{route('ficha.create')}}" class='btn btn-primary' role='button'> Nova Ficha </a>
            </div>
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="200px">Nome do Personagem</th>
                            <th width="200px">Classe</th>
                            <th>Raça</th>
                            <th width="235px">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fichas as $ficha)
                        <tr>
                            <td>{{$ficha->nome_per}}</td>
                            <td>{{$ficha->classe->nome}}</td>
                            <td>{{$ficha->raca->nome}}</td>
                            <td>
                            <a href="{{route('ficha.show',$ficha->id)}}"
                                class='btn btn-info'
                                role='button'> Editar </a>
                            <form style="display: inline-block" method="post"
                                action="{{route('ficha.destroy',$ficha->id)}}"
                                onsubmit="return confirm('Confirma Exclusão?')">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger"> Deletar </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                        </tbody>
                </table>
            </div>
        </section>
    </div>
    </div>
</body>
</html>
@endsection
