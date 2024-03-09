<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venta</title>
</head>
<body>
    <a href="/ventas/create">Nuevo venta</a>
    <h1>Ventas</h1>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID usuario</th>
                <th>Subtotal</th>
                <th>Fecha</th>
                <th>Fecha de creación</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($venta as $venta_ind)
                <tr>
                    <td>{{$venta_ind->id}}</td>
                    <td>{{$venta_ind->id_usuario}}</td>
                    <td>{{$venta_ind->subtotal}}</td>
                    <td>{{$venta_ind->fecha}}</td>
                    <td>{{$venta_ind->created_at}}</td>
                    <td>
                        <a href="{{route('ventas.show', $venta_ind->id)}}">Ver más</a>    | 
                        <a href="{{route('ventas.edit', $venta_ind->id)}}">Editar</a><br>
                        <form action="{{route('ventas.destroy', $venta_ind)}}" method="POST"> 
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