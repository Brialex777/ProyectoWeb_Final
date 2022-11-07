<x-plantilla>
    <h1>Crear Producto</h1>
    <a href="/producto">Pagina Principal</a>
    <form action="/producto" method="POST">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="name"><br>

        <label for="precio">Precio:</label><br>
        <input type="text" name="precio" id="cash"><br>

        <label for="Cantidad">Cantidad:</label><br>
        <input type="text" name="cantidad" id="quantity"><br>

        <input type="submit" value="Crear">
    </form>
</x-plantilla>