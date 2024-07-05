{{-- views/animais/cadastrar..blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais par adoção')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors-> all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form method="post" action="{{route('usuarios.gravar') }}">
    @csrf
    <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}">
    <br>
    <input type="text" name="email" placeholder="Digite seu email" value="{{old('email')}}" >
    <br>
    <input type="text" name="username" placeholder="Digite o seu username" value="{{old('username')}}" >
    <br>
    <input type="password" name="password" placeholder="Digite a sua senha" value="{{old('password')}}" >
     <br>
     <input type="text" name="admin" placeholder="Admin" value="{{old('admin')}}" >
     <br>
    <input type="submit" value="Gravar">
</form>
@endsection

          



