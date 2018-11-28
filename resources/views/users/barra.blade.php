<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Goblin's Aid - Ajudante de Ficha de RPG</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="shortcut icon" href="https://user-images.githubusercontent.com/28794961/42189845-93f9792e-7e30-11e8-89fc-766389d78c2e.jpg" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
                div.bot {
                    margin-top: 100px;
                    margin-bottom: 100px;
                    margin-right: 30px;
                    margin-left: 30px;
                }
                </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Goblin's Aid</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('fichas.index') }}">Minhas Fichas</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} </a></li>
                    <li>
                        <a href="{{ route('deslogar') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <span class="glyphicon glyphicon-log-in"></span> Sair
                        </a>
                        <form id="logout-form" action="{{ route('deslogar') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>                        
                  </li>
                </ul>      
            </div>
        </nav>

        <div class="container">

            @yield('conteudo')

        </div>
    </body>
    <footer class="footer">
<div class="bot">
        <div class="pull-right hidden-xs">
            <b>Versão</b> 0.1
        </div>
            Qualquer dúvida, contatar <strong>goblins.aid.help@gmail.com</strong>
    </div>
        </footer>

</html>
