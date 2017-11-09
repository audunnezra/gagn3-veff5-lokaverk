<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="nav">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/home') }}">Home</a>
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

            <div class="content">
                <div class="title m-b-md">
                    This is the homepage
                </div>
            </div>

        </div>
    </body>
</html>
