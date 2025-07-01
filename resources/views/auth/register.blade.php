@extends('layout')
@section('content')
<h1>Registro</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <label>Nombre: <input type="text" name="name" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Contraseña: <input type="password" name="password" required></label><br>
    <button type="submit">Registrarse</button>
</form>
<a href="{{ route('login.form') }}">Volver a Login</a>
@endsection