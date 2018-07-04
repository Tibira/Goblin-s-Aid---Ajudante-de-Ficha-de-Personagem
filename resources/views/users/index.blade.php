<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://user-images.githubusercontent.com/28794961/42189845-93f9792e-7e30-11e8-89fc-766389d78c2e.jpg" />
        <title>Goblin's Aid - Ajudante de ficha de RPG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                font-family: papyrus;
                text-align: center;
                color: black;
                font-size: 84px;
            }

            .title {
                font-size: 84px;
            }
            .button {
                font-size: 25px;
                font-family: arial;
                color: green;
                background-color: black;
                width: 160px;
                margin-left: 150px;
                border-radius: 4px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .meta{
                font-family: viner hand itc;
                font-size: 20px; 
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">ENTRAR</a>
                    @else
                        <a href="{{ route('social.login') }}">LOGIN</a>
                        <a href="{{ url('/register') }}">REGISTRO</a>
                    @endif
                </div>
            @endif

            <div class="content">
            Goblin's Aid
            <p class="meta">
                    Ajudante Pessoal de Ficha de RPG
                </p>
                <div class="title m-b-md">
                    @if(Auth::check())
                        <img src="https://user-images.githubusercontent.com/28794961/42189845-93f9792e-7e30-11e8-89fc-766389d78c2e.jpg" width="200" alt="" class="img-circle"> <br>
                        
                        <div class="button">
                    <a href="{{ url('/home') }}">
                            ENTRAR
                    </a>
                    </div>
                    @else
                        <img src="https://user-images.githubusercontent.com/28794961/41233028-83fe7b6a-6d5e-11e8-8256-5b6ad895119d.png" width="200" alt="" class="img-circle"> <br>
                    @endif
                    
                </div>
            </div>
        </div>
    </body>
</html>
