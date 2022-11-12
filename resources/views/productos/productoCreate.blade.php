<x-plantilla>
    <div class="row">
    <div class="col s12">
    <h1>Crear Producto</h1>
    <form action="/producto" method="POST">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="name" value="{{ old('nombre') }}">
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="precio">Precio:</label><br>
        <input type="text" name="precio" id="cash" value="{{ old('precio') }}">
        @error('precio')
            <i>{{ $message }}</i>
        @enderror
        <br>

        <label for="Cantidad">Cantidad:</label><br>
        <input type="text" name="cantidad" id="quantity" value="{{ old('cantidad') }}">
        @error('cantidad')
            <i>{{ $message }}</i>
        @enderror
        <br>

        <input class="btn waves-effect waves-light" type="submit" value="Crear">
    </form>
    </div>
    </div>
</x-plantilla>