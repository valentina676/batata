{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para Adoção')

@section('conteudo')
<p>
    <a href="{{ route ('animais.cadastrar')}}">Cadastrar animal</a>
</p>
<p> Veja nossa lista de clientes</p>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>

        @foreach($animais as $animal)
        <tr>
            <td>{{$animal['nome']}}</td>
            <td>{{$animal['idade']}}</td>
            <td><a href="{{route('animais.apagar', $animal['id'])}}">Apagar</a></td>
            <td><a href="{{route('animais.editar', $animal['id'])}}">Editar</a></td>
        </tr>
        @endforeach
    </table>

@endsection