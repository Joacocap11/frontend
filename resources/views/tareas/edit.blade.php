@extends('layout')
@section('content')
<h1>Editar Tarea</h1>
<form method="POST" action="{{ route('tareas.update', $tarea['id']) }}">
    @csrf @method('PUT')
    <label>Título: <input type="text" name="titulo" value="{{ $tarea['titulo'] }}" required></label><br>
    <label>Descripción: <textarea name="cuerpo">{{ $tarea['cuerpo'] }}</textarea></label><br>
    <button type="submit">Actualizar</button>
</form>
@endsection