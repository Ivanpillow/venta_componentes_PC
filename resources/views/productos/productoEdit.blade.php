
<x-mi-layout titulo="Modificar Producto">
    <form class="form-group" action="{{route('producto.update', $producto)}}" method="POST">
        @csrf {{--Importante en cada formulario. Es otro input que genera una llave--}}
        @method('PATCH')
        
        <a class="btn btn-info" href="{{route('producto.index')}}">Lista de Productos</a>
        <h1>Editar producto</h1>
        <label for="nombre">Nombre: </label><br>
        <input class="form-control" type="text" name="nombre" value="{{old('nombre') ?? $producto->nombre}}"> <!-- El old es para si no pasa el filtro despues de editar, vuelva a la respuesta que estaba previamente guardada -->
        
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="descripcion">Descripcion: </label><br>
        <input class="form-control" type="text" name="descripcion" value="{{old('descripcion') ?? $producto->descripcion}}"> 
        <br>

        <label for="precio">Precio: </label><br>
        <input class="form-control" type="number" name="precio" value="{{old('precio') ?? $producto->precio}}"> 
        <br>

        <label for="categoria">Categoría: </label><br>
        <input class="form-control" type="text" name="categoria" value="{{old('categoria') ?? $producto->categoria}}"> 
        <br>
        
        <label for="stock">En inventario: </label><br>
        <input class="form-control" type="number" name="stock" value="{{old('stock') ?? $producto->stock}}"> 
        <br>

        <label for="status">Status: </label>
        <input class="form-control" type="number" name="status" value="{{old('status') ?? $producto->status}}"> 
        <br>
        <input class="btn btn-success" type="submit" value="Enviar">
    </form>
    @include('parciales.form-error')

    
</x-mi-layout>
