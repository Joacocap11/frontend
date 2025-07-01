@extends('layouts.app')

@section('content')
<h1>Editar Categoría</h1>

<form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
    @csrf @method('PUT')
    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $categoria->nombre }}" required>
    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('categorias.index') }}">Volver</a>
@endsection
