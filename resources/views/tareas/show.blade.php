@extends('layout')
@section('content')
<h1>Detalle de Tarea</h1>
<p><strong>Título:</strong> {{ $tarea['titulo'] }}</p>
<p><strong>Descripción:</strong> {{ $tarea['cuerpo'] }}</p>
<a href="{{ route('tareas.index') }}">Volver</a>
@endsection