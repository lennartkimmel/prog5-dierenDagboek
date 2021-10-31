<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mijn Dieren Dagboek</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background-image: url("https://www.wallpaperup.com/uploads/wallpapers/2015/02/06/614637/4c053b6ff0518fb910b244a4184251dc.jpg");
            }

            .full-height {
                height: 100vh;
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
                color: #000;
                border-style: solid;
                background: #A9A9A9;
                padding: 0 25px;
                font-size: 20px;
                text-transform: uppercase;
            }   
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/post') }}">Alle posts</a>
                    @else
                        <a href="{{ route('login') }}">Inloggen</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registreren</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mijn Dieren Dagboek
                </div>
            </div>
        </div>
    </body>
</html>
