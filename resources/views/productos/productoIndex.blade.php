<x-plantilla>
    <div class="row">
    <div class="col s12">
    <h1>Lista de Productos</h1>
    <table class="highlight">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>
                    <a href="/producto/{{ $producto->id }}" class="waves-effect waves-light btn-small">Ver Detalles</a>
                </td>
                <td>
                    <a href="/producto/{{ $producto->id }}/edit" class="waves-effect waves-light btn-small">Editar</a>
                </td>
                <td>
                    <form action="/producto/{{ $producto->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar" class="waves-effect waves-teal btn-flat red darken-1">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    </div>
</x-plantilla>