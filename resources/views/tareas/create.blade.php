@extends('layout')
@section('content')
<h1>Nueva Tarea</h1>
<form method="POST" action="{{ route('tareas.store') }}">
    @csrf
    <label>Título: <input type="text" name="titulo" required></label><br>
    <label>Descripción: <textarea name="cuerpo"></textarea></label><br>
    <button type="submit">Guardar</button>
</form>
@endsection