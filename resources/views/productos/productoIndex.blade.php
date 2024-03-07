<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <a href="/producto/create">Nuevo producto</a>
    <h1>Productos</h1>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>En inventario</th>
                <th>Status</th>
                <th>Fecha de creación</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($producto as $producto_ind)
                <tr>
                    <td>{{$producto_ind->id}}</td>
                    <td>{{$producto_ind->nombre}}</td>
                    <td>{{$producto_ind->descripcion}}</td>
                    <td>{{$producto_ind->precio}}</td>
                    <td>{{$producto_ind->stock}}</td>
                    <td>{{$producto_ind->categoria}}</td>
                    <td>{{$producto_ind->status}}</td>
                    <td>{{$producto_ind->created_at}}</td>
                    <td>
                        <a href="{{route('producto.show', $producto_ind->id)}}">Ver más</a>    | 
                        <a href="{{route('producto.edit', $producto_ind->id)}}">Editar</a><br>
                        <form action="{{route('producto.destroy', $producto_ind)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" style="border-radius: 2px; margin: auto;">
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>