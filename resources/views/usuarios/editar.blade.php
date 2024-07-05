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
 <form action="{{ route('usuarios.editar', $usuario->id) }}" method="post">
 @csrf

 @method('put')
 <p><input value="{{ old('nome', $usuario->nome ?? '') }}" type="text" name="nome" placeholder="Nome do usuario" value=""></p>
 <p><input value="{{ old('email', $usuario->email ?? '') }}" type="text" name="email" placeholder="Digite seu email"></p>
 <p><input value="{{ old('username', $usuario->username ?? '') }}" type="text" name="username" placeholder="Digite o seu username"></p>
 <p><input value="{{ old('password', $usuario->password ?? '') }}" type="text" name="password" placeholder="Digite sua senha"></p>
 <p><input value="{{ old('admin', $usuario->admin ?? '') }}" type="text" name="admin" placeholder="Admin"></p>
 <p><input type="submit" value="Gravar"></p>
 </form>
@endsection


           


