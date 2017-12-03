<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">

            .custom-nav-button{
                all:initial;
                padding:5px;
                width: 7em;  height: 2em;
                background-color:#ef762f;
                border:2px solid white;
                border-radius:2px;
                text-align:center;
                font-size:20px;
                font-family:verdana;
                color:white;
            }

            .custom-nav-button:hover{
                cursor:pointer;
                background-color:#ff904f;
            }

            .nav-offset-right{
               padding-left:4%;
               padding-right:4.05%;
            }

            .nav-offset-top{
                margin-top:20px;
            }

            .whitespace{
                background-color:orange;
                opacity:0;
                color:white;
            }

            .body{
                text-align:center;
                color:black;
            }

            .full-height{
                height:100%;
            }

            .navbar{
                margin-bottom:0px;
                background-color:#ef762f;
                padding-top:2%;
                padding-bottom:3%;
            }

            .span-info{
                font-size:40px;
                color:red;
            }

            .thread-title{
                
            }

            html, body{
                height:100%;
            }

            label{
                color:black;
                font-size:30px;
            }

        </style> 
    </head>
    <body>
        <div id="app" class="full-height">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid nav-offset-right">
                    <div class="nav navbar-nav navbar-left">
                        <a href="{{ url('/home') }}"><button class="custom-nav-button">All Threads</button></a>
                    </div>
                    <div class="nav navbar-nav navbar-left">
                        <a href="{{ url('/create') }}"><button class="custom-nav-button">New Thread</button></a>
                    </div>
                    @if (Route::has('login'))
                        <div class="nav navbar-nav navbar-right">
                            @auth
                                <form action="/logout" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="custom-nav-button">Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"><button class="custom-nav-button">Login</button></a>
                                <a href="{{ route('register') }}"><button class="custom-nav-button">Register</button></a>
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>
            <div class="container-fluid full-height">
                <div class="row full-height">
                    <div class="col-md-2 whitespace full-height">
                        <!-- whitespace -->
                    </div>
                    <div class="col-md-8 body full-height">
                        @yield('content')
                    </div>
                    <div class="col-md-2 whitespace full-height">
                        <!-- whitespace -->
                    </div>
                </div>
            </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>