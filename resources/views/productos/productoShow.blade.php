<x-plantilla>
    <h1>Detalles del producto</h1>

    <div style="width:35vw;margin: 0 auto;">
        <table class="striped">
            <tr>
                <td>Nombre del producto:</td>
                <td>{{ $producto->nombre }}</td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td>{{ $producto->descripcion }}</td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>{{ $producto->precio }}</td>
            </tr>
            <tr>
                <td>Cantidad:</td>
                <td>{{ $producto->cantidad }}</td>
            </tr> 
            <tr>
                <td>Archivo:</td>
                <td>
                    @foreach ($producto->archivos as $archivo)
                        <li>{{ $archivo->nombre }}</li>
                    @endforeach
                </td>
            </tr>       
        </table>
    </div>
</x-plantilla>