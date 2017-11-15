<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">

            .offset-right{
                margin-right:20px;
            }
            .whitespace{
                background-color:red;
                opacity:0.5;
                color:white;
            }

            .body{
                text-align:center;
                background-color:indigo;
                color:white;
            }

        </style> 
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid offset-right">
                <div class="nav navbar-nav navbar-left">
                    <a href="{{ url('/home') }}">Home</a>
                </div>
                @if (Route::has('login'))
                    <div class="nav navbar-nav navbar-right">
                        @auth
                            <form action="/logout" method="POST">
                                {{ csrf_field() }}
                                <button type="submit">Log Out</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 whitespace">
                    whitespace
                </div>
                <div class="col-md-8 body">
                    <h1>
                        This is the homepage.
                    </h1>
                    <p>
                        content
                    </p>
                </div>
                <div class="col-md-2 whitespace">whitespace</div>
            </div>
        </div>
    </body>
</html>
