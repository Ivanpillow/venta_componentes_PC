<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/info">Informacion</a>
    <hr>
    <h1>Venta</h1>
    <form action="/venta" method="POST">
        <!-- siempre poner csrf para formularios -->
        @csrf
        <label for="id_usuario">ID del usuario</label><br>
        <input type="text" name="id_usuario" value="{{ old('id_usuario') }}">
        @error('id_usuario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="subtotal">Subtotal</label> <br>
        <input type="text" name="subtotal" value="{{ old('subtotal') }}">
        @error('subtotal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="fecha">Fecha</label> <br>
        <input type="text" name="fecha" value="{{ old('fecha') }}">
        @error('fecha')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>
        
        <input type="submit" value="Enviar">

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        

    </form>
</body>
</html>