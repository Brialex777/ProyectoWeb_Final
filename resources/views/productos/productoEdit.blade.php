<x-plantilla>
    <h1 class="center-align">Edita Producto</h1>
    <form action="/producto/{{ $producto->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div style="width:35vw;margin: 0 auto;">
            <div class="input-field col s12">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="name" value="{{ $producto->nombre }}">
                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror
                <br>
            </div>

            <div class="input-field col s12">
                <label for="nombre">Descripción:</label><br>
                <textarea class="materialize-textarea" id="descripcion" name="descripcion">{{ $producto->descripcion }}</textarea>
                @error('descripcion')
                    <i>{{ $message }}</i>
                @enderror
                <br>
            </div>

            <div class="input-field col s12">
                <label for="precio">Precio:</label><br>
                <input type="text" name="precio" id="cash" value="{{ $producto->precio }}">
                @error('precio')
                    <i>{{ $message }}</i>
                @enderror
                <br>
            </div>

            <div class="input-field col s12">
                <label for="Cantidad">Cantidad:</label><br>
                <input type="text" name="cantidad" id="quantity" value="{{ $producto->cantidad }}">
                @error('cantidad')
                    <i>{{ $message }}</i>
                @enderror
                <br>
            </div>

            <input class="btn waves-effect waves-light" type="submit" value="Editar">
        </div>
    </form>
</x-plantilla>