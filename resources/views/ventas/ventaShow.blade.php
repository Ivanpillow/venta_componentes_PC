<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Venta</title>
</head>
<body>
    <a href="{{route('ventas.index')}}">Lista de Ventas</a>
    <h1>Detalles de Venta</h1>
    <ul>
        <li><strong>ID usuario: </strong> {{ $venta->id_usuario }}</li>
        <li><strong>Subtotal: </strong> {{ $venta->subtotal }}</li>
        <li><strong>Fecha: </strong> {{ $venta->fecha }}</li>
    </ul>
</body>
</html>