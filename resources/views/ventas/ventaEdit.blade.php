<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h1>Editar Venta</h1>

    <form action="/venta/update" method="POST">
        <!-- siempre poner csrf para formularios -->
        @csrf
        <!-- metodo patch para poder editar -->
        @method('PATCH')
        <label for="id_usuario">ID del usuario</label><br>
        <input type="text" name="id_usuario" value="{{ old('id_usuario') ?? $venta->id_usuario }}">
        @error('id_usuario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="subtotal">Subtotal</label> <br>
        <input type="text" name="subtotal" value="{{ old('subtotal') ?? $venta->subtotal }}">
        @error('subtotal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="fecha">Fecha</label> <br>
        <input type="text" name="fecha" value="{{ old('fecha') ?? $venta->fecha }}">
        @error('fecha')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>