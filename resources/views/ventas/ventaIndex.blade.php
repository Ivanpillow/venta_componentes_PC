<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de ventas</title>
</head>
<body>
    <a href="/venta/create"> Nueva venta </a>
    
    <h1>Lista de ventas </h1>
    <table border=1>
        <thead>
            <tr>
                <th>ID_usuario </th>
                <th>Subtotal </th>
                <th>Fecha </th>
                <th>Creado / Enviado </th>
            </tr>
        </thead>
        <body>
            @foreach ($ventas as $venta)
            <tr>
                <td>{{ $venta->id_usuario }}</td>
                <td>{{ $venta->subtotal }}</td>
                <td>{{ $venta->fecha }}</td>
                <td>{{ $venta->created_at }}</td>
                <td>
                    <a href="{{ route('venta.show', $venta->id) }}"> Detalle </a>
                    <br>
                    <a href="{{ route('venta.edit', $venta->id_usuario) }}"> Editar </a>
                    <br>
                    <form action="{{ route('venta.destroy', $venta) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </body>
    </table>
    
</body>
</html>