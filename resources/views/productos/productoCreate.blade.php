<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
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
</body>
</html>