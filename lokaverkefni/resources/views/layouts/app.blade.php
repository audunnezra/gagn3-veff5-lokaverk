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
                background-color:orange;
                opacity:1;
                color:white;
            }

            .body{
                text-align:center;
                background-color:purple;
                color:white;
            }

            .full-height{
                height:100%;
            }

            .navbar{
                margin-bottom:0px;
            }

            html, body{
                height:100%;
            }

        </style> 
    </head>
    <body>
        <div id="app" class="full-height">
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
