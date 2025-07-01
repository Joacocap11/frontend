@extends('layouts.app')

@section('content')
<h1>Nuevo Comentario</h1>

<form action="{{ route('comentarios.store') }}" method="POST">
    @csrf
    <label>Contenido:</label>
    <textarea name="contenido" required></textarea>
    <button type="submit">Guardar</button>
</form>

<a href="{{ route('comentarios.index') }}">Volver</a>
@endsection
