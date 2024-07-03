@extends('templates/layout')
@section('titulo', 'Animais para adoção - Editar')
@section('corpo')

 <h1>Produtos - Editar</h1>
 @if ($errors->any())
 <p>Preencha os campos corretamente.</p>

 <ul>
 @foreach($errors->all() as $erro)
 <li>{{ $erro }}</li>
 @endforeach
 </ul>

 @endif
 <form action="{{ route('animais.editar', $animal->id) }}" method="post">
 @csrf

 @method('put')
 <p><input value="{{ old('nome', $animal->nome ?? '') }}" type="text" name="nome" placeholder="Nome do animal" value=""></p>
 <p><input value="{{ old('idade', $animal->idade ?? '') }}" type="number" name="idade" placeholder="idade"></p>
 <p><input type="submit" value="Gravar"></p>
 </form>
@endsection