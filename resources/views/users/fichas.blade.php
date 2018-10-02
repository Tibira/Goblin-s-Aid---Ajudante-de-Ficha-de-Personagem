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
                            <th>Classe</th>
                            <th width="235px">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fichas as $fic)
                        <tr>
                            <td>{{$fic->nome_per}}</td>
                            <td>{{$fic->classe_id}}</td>
                            <td>
                            <a href="{{route('ficha.show',$fic->id)}}"
                                class='btn btn-info'
                                role='button'> Editar </a>
                            <form style="display: inline-block" method="post"
                                action="#"
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
        </section>
    </div>
    </div>
</body>
    <footer class="footer">
        <div class="pull-right hidden-xs">
            <b>Verção</b> 0.1
        </div>
            Qualquer dúvida, contatar <strong>goblins.aid.help@gmail.com</strong>
    </footer>
</html>
@endsection
