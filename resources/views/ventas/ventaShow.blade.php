<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de la venta</title>
    <a href="{{ route('venta.index') }}"> Tabla de Ventas </a>
</head>
<body>
    <h1>Detalle de la venta </h1>

    <ul>
        <li>ID: {{ $venta->id }}</li>
        <li>ID_usuario: {{ $venta->id_usuario }}</li>
        <li>Subtotal: {{ $venta->subtotal }}</li>
        <li>Fecha: {{ $venta->fecha }}</li>
    </ul>
</body>
</html>