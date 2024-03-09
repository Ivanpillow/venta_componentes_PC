<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar venta</title>
</head>
<body>
    <form action={{route('ventas.update', $venta)}}" method="POST">
        @csrf 
        <!--Importante en cada formulario. Es otro input que genera una llave-->
        @method('PATCH')
        
        <a href="{{route('ventas.index')}}">Lista de Ventas</a>
        <h1>Editar venta</h1>
        <label for="id_usuario">ID usuario: </label><br>
        <input type="text" name="id_usuario" value="{{old('id_usuario') ?? $venta->id_usuario}}"> <!-- El old es para si no pasa el filtro despues de editar, vuelva a la respuesta que estaba previamente guardada -->
        <br><br>

        <label for="subtotal">Subtotal: </label><br>
        <input type="number" name="subtotal" value="{{old('subtotal') ?? $venta->subtotal}}"> 
        <br><br>

        <label for="fecha">Fecha: </label><br>
        <input type="text" name="fecha" value="{{old('fecha') ?? $venta->fecha}}"> 
        <br><br>

        <input type="submit" value="Enviar">
    </form>
    @include('parciales.form-error')
</body>
</html>
