@extends('base')

@section('titulo', 'Login')

@section('conteudo')

@if(session('erro'))
<div style="background-color:red;color:white">
   {{session('erro')}}
    </div> 
@endif

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors-> all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form  action="{{route('login')}}" method="post">
@csrf
<input type="text" name="username" placeholder="login">
<br>
<input type="password" name="password" placeholder="senha">
<br>
<input type="submit" name="Entrar">
</form>

@endsection