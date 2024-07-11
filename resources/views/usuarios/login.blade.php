@extends('base')

@section('titulo', 'Login')

@section('conteudo')

<form method="post" action="{{route('login')}}">
@csrf
<input type="text" name="username" placeholder="usuarios">
<br>
<input type="text" name="password" placeholder="senha">
<br>
<input type="submit" name="Entrar">
</form>

@endsection