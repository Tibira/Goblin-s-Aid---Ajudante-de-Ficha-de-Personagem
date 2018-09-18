@extends('adminlte::page')

@section('content_header')
<body>
    <div class="content-warpper" style="min-height: 540px;">
        <section class="content">
            <div class='col-sm-11'>
                <h2>Fichas</h2>
            </div>
            <div class='col-sm-1'>
                <a href="#" class='btn btn-primary' role='button'> Novo </a>
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
                        @foreach ($ficha as $fic)
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
</body>
    <footer class="footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
            <strong>Copyright © 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>
@stop
