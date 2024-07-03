
@extends('base')

@section('titulo', 'Clientes para reserva')

@section('conteudo')
<p>
    <a href="{{ route ('clientes.cadastrar')}}">Cadastrar cliente</a>
</p>
<p> Veja nossa lista de clientes</p>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>

        </tr>

        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente['nome']}}</td>
            <td>{{$cliente['telefone']}}</td>
            <td>{{$cliente['endereco']}}</td>
            <td>{{$cliente['data_nasc']}}</td>
       
   
        </tr>
        @endforeach
    </table>

@endsection