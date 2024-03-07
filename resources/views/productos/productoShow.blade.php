<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Producto</title>
</head>
<body>
    <a href="{{route('producto.index')}}">Lista de Productos</a>
    <h1>Detalles de Producto</h1>
    <ul>
        <li><strong>Nombre: </strong> {{$producto->nombre}}</li>
        <li><strong>Descripcion: </strong> {{$producto->descripcion}}</li>
        <li><strong>Precio: </strong> {{$producto->precio}}</li>
        <li><strong>Categoría: </strong> {{$producto->categoria}}</li>
        <li><strong>En Inventario: </strong> {{$producto->stock}}</li>
        <li><strong>Status: </strong> {{$producto->status}}</li>
    </ul>
</body>
</html>