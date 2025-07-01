@extends('layout')
@section('content')
<h1>Listado de Tareas</h1>
<a href="{{ route('tareas.create') }}">Nueva Tarea</a>
<ul>
@foreach($tareas as $t)
    <li>
        {{ $t['titulo'] }}
        <a href="{{ route('tareas.edit', $t['id']) }}">Editar</a>
        <form action="{{ route('tareas.destroy', $t['id']) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </li>
@endforeach
</ul>
@endsection