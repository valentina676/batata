{{-- resources/viws/base.blade.php --}}
<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1>@yield('titulo')</h1>
        <hr>
        <a href="{{route('index')}}">Inicial</a>
        |
        <a href="{{route('animais')}}">Animais</a>
        |
         <a href="{{route('usuarios')}}">Usuarios</a>
        | 
        <hr>
        <a href="{{route('login')}}">Login</a>
       
        @yield('conteudo')
    </body>
</html>  {{-- no blade tudo comeca com @ --}}