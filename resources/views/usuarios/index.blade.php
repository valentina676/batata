{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para Adoção')

@section('conteudo')
<p>
    <a href="{{ route ('usuarios.cadastrar')}}">Cadastrar usuario</a>
</p>
<p> Veja nossa lista de clientes</p>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>admin</th>
        </tr>

        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario['name']}}</td>
            <td>{{$usuario['email']}}</td>
            <td>{{$usuario['username']}}</td>
            <td>{{$usuario['password']}}</td>
            <td>{{$usuario['admin']}}</td>
            <td><a href="{{route('usuarios.apagar', $usuario['id'])}}">Apagar</a></td>
            <td><a href="{{route('usuarios.editar', $usuario['id'])}}">Editar</a></td>
        </tr>
        @endforeach
    </table>

@endsection
