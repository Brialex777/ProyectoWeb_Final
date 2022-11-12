<x-plantilla>
    <h1>Detalles del producto</h1>

    <div class="row">
        <div class="col s12">
            <table class="striped">
                <tr>
                    <td><h4>Nombre del producto:</h4></td>
                    <td><h4>{{ $producto->nombre }}</h4></td>
                </tr>
                <tr>
                    <td><h4>Precio:</h4></td>
                    <td><h5>{{ $producto->precio }}</h5></td>
                </tr>
                <tr>
                    <td><h4>Cantidad:</h4></td>
                    <td><h5>{{ $producto->cantidad }}</h5></td>
                </tr>       
            </table>
        </div>
    </div>
</x-plantilla>