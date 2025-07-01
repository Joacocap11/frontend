@extends('layout')
@section('content')
<h1>Iniciar Sesión</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Contraseña: <input type="password" name="password" required></label><br>
    <button type="submit">Entrar</button>
</form>
<a href="{{ route('register.form') }}">Registrarse</a>
@endsection