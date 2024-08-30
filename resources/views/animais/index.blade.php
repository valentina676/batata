{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para Adoção')

@section('conteudo')
<p>
    <a href="{{ route ('animais.cadastrar')}}" class="px-4 py-1 text-white font-light tracking-wider bg-blue-800 rounded">
    <i class=" fas fa-plus mr-3"></i>Cadastrar animal</a>
</p>
<p> Veja nossa lista de clientes</p>

    <table class="min-w-full bg-white" border="1">
        <thead class="bg-gray-800 text-white">
        <tr>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Idade</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Apagar</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Editar</th>
        </tr>
        </thead>
        @foreach($animais as $animal)

        <tbody class="text-gray-700">
        <tr @if($loop->even) class="bg-gray-200" @endif>
            <td class="text-left py-3 px-4">{{$animal['nome']}}</td>
            <td class="text-left py-3 px-4">{{$animal['idade']}}</td>
            <td class="text-left py-3 px-4"><a class="inline-block px-3 py-1 font-semibold text-green-900 leading-tight bg-red-400 opacity-100 rounded-full"href="{{route('animais.apagar', $animal['id'])}}">Apagar</a></td>
            <td class="text-left py-3 px-4"><a class="inline-block px-3 py-1 font-semibold text-green-900 leading-tight bg-blue-400 opacity-100 rounded-full" href="{{route('animais.editar', $animal['id'])}}">Editar</a></td>
        </tr>
        </tbody>
        @endforeach
    </table>

    



@endsection