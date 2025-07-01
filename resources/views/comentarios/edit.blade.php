@extends('layouts.app')

@section('content')
<h1>Editar Comentario</h1>

<form action="{{ route('comentarios.update', $comentario->id) }}" method="POST">
    @csrf @method('PUT')
    <label>Contenido:</label>
    <textarea name="contenido" required>{{ $comentario->contenido }}</textarea>
    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('comentarios.index') }}">Volver</a>
@endsection
