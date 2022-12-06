<x-plantilla>
    <h1 class="center-align">Crear Producto</h1>
    <form action="/producto" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="width:35vw;margin: 0 auto;">
            <div class="input-field col s12">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="name" value="{{ old('nombre') }}">
                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror
            </div>

            <div class="input-field col s12">
                <label class="form-label" for="nombre">Descripción:</label><br>
                <textarea class="materialize-textarea" id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                <i>{{ $message }}</i>
                @enderror
            </div>

            <div class="input-field col s12">
                <label for="precio">Precio:</label><br>
                <input type="text" name="precio" id="cash" value="{{ old('precio') }}">
                @error('precio')
                    <i>{{ $message }}</i>
                @enderror
            </div>

            <div class="input-field col s12">
                <label for="Cantidad">Cantidad:</label><br>
                <input type="text" name="cantidad" id="quantity" value="{{ old('cantidad') }}">
                @error('cantidad')
                    <i>{{ $message }}</i>
                @enderror
            </div>

            <input class="btn waves-effect waves-light" type="submit" value="Crear">
            <input type="file" name="archivo" id="archivo">
        </div>
    </form>
</x-plantilla>