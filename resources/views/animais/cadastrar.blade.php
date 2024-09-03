{{-- views/animais/cadastrar..blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais par adoção')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div >
    <h4>Deu ruim</h4>
    @foreach($errors-> all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<div class="leading-loose">

<form class="p-10 bg-white rounded shadow-xl" method="post" enctype="multipart/form-data" action="{{route('animais.gravar') }}">
    @csrf
    <label class="block text-sm text-gray-600" for="name">Name</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="text" name="nome" placeholder="Nome" value="{{old('nome')}}">
    <br>
    <label class="block text-sm text-gray-600" for="name">Idade</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="number" name="idade" placeholder="Idade" value="{{old('idade')}}" >
    <br>
    <label class="block text-sm text-gray-600" for="imagem">Imagem</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="imagem" type="file" name="imagem" placeholder="Idade" >
    <br>
    <main class="w-full flex-grow p-6">
    <input class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"  type="submit" value="Gravar">
</form>
</div>
@endsection