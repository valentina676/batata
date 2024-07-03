{{-- views/animais/cadastrar..blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Clientes para o restaurante')

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

<form method="post" action="{{route('clientes.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{old('nome')}}">
    <br>
    <input type="number" name="telefone" placeholder="Telefone" value="{{old('telefone')}}" >
     <br>
    <input type="text" name="endereco" placeholder="Endereço" value="{{old('endereco')}}" >
    <br>
    <input type="date" name="data_nasc" placeholder="Data de Nascimento " value="{{old('data_nasc')}}" >
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection