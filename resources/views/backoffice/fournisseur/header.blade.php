<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Statique</title>
    <x-style />
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('html')}}">HTML</a></li>
            <li><a href="{{ route('css')}}">CSS</a></li>
            <li><a href="{{ route('js')}}">JavaScript</a></li>
            <li><a href="{{ route('contact')}}">Contact</a></li>
            <li><a href="{{ route('register')}}">Backoffice</a></li>
        </ul>
    </nav>
    <h1 style="text-align: center">@yield('titre')</h1>
    @yield('content')
    @yield('card')
</body>
</html>