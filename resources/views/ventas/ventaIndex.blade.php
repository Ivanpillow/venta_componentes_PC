<x-mi-layout titulo="Lista de Ventas">
    <a class="btn btn-primary" href="/ventas/create">Nuevo venta</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID_usuario</th>
                <th>Subtotal</th>
                <th>Fecha de venta</th>
                <th>Fecha de registro</th>
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
                        <a class="btn btn-success" href="{{route('ventas.show', $venta_ind->id)}}">Ver más</a>    | 
                        <a class="btn btn-success" href="{{route('ventas.edit', $venta_ind->id)}}">Editar</a><br>
                        <form action="{{route('ventas.destroy', $venta_ind)}}" method="POST"> 
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Eliminar" style="border-radius: 2px; margin: auto;">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-mi-layout>