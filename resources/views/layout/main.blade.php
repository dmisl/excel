<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <header class="border-bottom d-flex" style="height: 60px; user-select: none;">
        <a href="{{ route('home.index') }}" style="text-decoration: none;">
            <h3 class="py-2 ms-2" style="font-size: 30px;">Головна сторінка</h3>
        </a>
        @if (Auth::check())
            <a href="{{ route('home.logout') }}" class="ms-auto" style="margin-top: 10px; margin-right: 20px;">
            <button class="btn btn-primary " style="height: 40px; ">
                Вийти з облікового запису
            </button>
            </a>
        @else
            <a href="{{ route('login.index') }}" class="ms-auto" style="margin-top: 10px; margin-right: 20px;">
            <button class="btn btn-primary " style="height: 40px; ">
                Увійти в обліковий запис
            </button>
            </a>
        @endif
    </header>
    @if(session('alert'))
        <div class="alert alert-primary text-center py-2 mx-auto" style="width: 70%;" role="alert">
            {{ session('alert') }}
        </div>
        @php(session()->forget('alert'))
    @endif
    <main>
        @yield('content')
    </main>
</body>
</html>
