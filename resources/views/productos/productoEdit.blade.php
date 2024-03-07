<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
</head>
<body>
    <form action="{{route('productos.update', $producto)}}" method="POST">
        @csrf {{--Importante en cada formulario. Es otro input que genera una llave--}}
        @method('PATCH')
        
        <a href="{{route('productos.index')}}">Lista de Productos</a>
        <h1>Editar producto</h1>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="{{old('nombre') ?? $producto->nombre}}"> <!-- El old es para si no pasa el filtro despues de editar, vuelva a la respuesta que estaba previamente guardada -->
        <br>

        <label for="descripcion">Descripcion: </label>
        <input type="text" name="descripcion" value="{{old('descripcion') ?? $producto->nombre}}"> 
        <br>

        <label for="precio">Precio: </label>
        <input type="number" name="precio" value="{{old('precio') ?? $producto->precio}}"> 
        <br>

        <label for="categoria">Categoría: </label>
        <input type="text" name="categoria" value="{{old('categoria') ?? $producto->categoria}}"> 
        <br>
        
        <label for="stock">En inventario: </label>
        <input type="number" name="stock" value="{{old('stock') ?? $producto->stock}}"> 
        <br>

        <label for="status">Status: </label>
        <input type="number" name="status" value="{{old('status') ?? $producto->status}}"> 
        <br>

        <input type="submit" value="Enviar">
    </form>
    @include('parciales.form-error');
</body>
</html>
