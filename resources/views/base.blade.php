{{-- resources/viws/base.blade.php --}}
<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1>@yield('titulo')</h1>
        <hr>
        @yield('conteudo')
    </body>
</html>  {{-- no blade tudo comeca com @ --}}