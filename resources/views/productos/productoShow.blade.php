
<x-mi-layout titulo="Producto">
    <a class="btn btn-info" href="{{route('producto.index')}}">Lista de Productos</a>
    <h1>Detalles de Producto</h1>
    <ul>
        <li><strong>Nombre: </strong> {{$producto->nombre}}</li>
        <li><strong>Descripcion: </strong> {{$producto->descripcion}}</li>
        <li><strong>Precio: </strong> {{$producto->precio}}</li>
        <li><strong>Categoría: </strong> {{$producto->categoria}}</li>
        <li><strong>En Inventario: </strong> {{$producto->stock}}</li>
        <li><strong>Status: </strong> {{$producto->status}}</li>
    </ul>
</x-mi-layout>