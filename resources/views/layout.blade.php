<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Tareas</title>
</head>
<body>
    @if(session('user'))
        <p>Bienvenido, {{ session('user')['name'] }} | <a href="{{ route('logout') }}">Salir</a></p>
    @endif

    @yield('content')
</body>
</html>
