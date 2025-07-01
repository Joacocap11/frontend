@extends('layouts.app')

@section('content')
<h1>Comentarios</h1>
<a href="{{ route('comentarios.create') }}">Agregar Comentario</a>

<ul>
@foreach ($comentarios as $comentario)
    <li>
        {{ $comentario->contenido }}
        <a href="{{ route('comentarios.edit', $comentario->id) }}">Editar</a>
        <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
