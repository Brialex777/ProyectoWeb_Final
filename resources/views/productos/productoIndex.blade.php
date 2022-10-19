<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Lista de Productos</h1>

    <a href="/producto/create">Crear Productos</a>
    <table border = 1>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>
                    <a href="/producto/{{ $producto -> id }}">
                        {{ $producto->nombre }}
                    </a>
                </td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>
                    <a href="/producto/{{ $producto->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/producto/{{ $producto->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <ul>
        
    </ul>
</body>
</html>