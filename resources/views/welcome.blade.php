<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">

        <title>ARMS-STORE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    
        <style>
            html, body {               
                background-image: url("https://cnnespanol2.files.wordpress.com/2017/10/armas-nevada-leyes-normativas-masacre-texas.jpg?quality=100&strip=info&strip=info");
                 background-repeat: no-repeat;
				font-family:Arial;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color:  #d6dbdf ;
                padding: 0 25px;
                font-size:20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            .m-b-md {
                margin-bottom: 30px;
                font-size: 200px;
                color:  black ;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            .m-b-mdd {
                margin-bottom: 30px;
                font-size: 50px;
                color:  #d6dbdf ;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Productos</a>
                    @else
                        <a href="{{ url('/login') }}">Ingresar</a>
                        <a href="{{ url('/register') }}">Registrarse</a>
                    @endif
                </div>
            @endif

            <div class="content">
                    <div class="title m-b-md">
                            Arms Store
                    </div>
                    <div class="title m-b-mdd">
                        <a >Armas y Equipamiento Militar</a> 
                    </div>
                    <a href="{{ route('producto') }}" class="btn btn-primary" >Ingresar</a><br>

                    <a href="{{ route('animation') }}" class="btn btn-primary" >Salir</a>
                    
                    
                    
                </div>
        </div>
    </body>
</html>
