<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body>
    <nav>
        <div class="nav-wrapper teal accent-4">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li class="active"><a href="/producto">Lista de productos</a></li>
                <li class="active"><a href="/producto/create">Crear Producto</a></li>
            </ul>
        </div>
    </nav>

    {{ $slot }}
</body>
</html>