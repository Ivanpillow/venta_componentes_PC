<x-mi-layout titulo="Lista de Ventas">
    <a class="btn btn-primary" href="{{route('ventas.index')}}">Lista de Ventas</a>
    <h1>Detalles de Venta</h1>
    <ul>
        <li><strong>ID usuario: </strong> {{ $venta->id_usuario }}</li>
        <li><strong>Subtotal: </strong> {{ $venta->subtotal }}</li>
        <li><strong>Fecha: </strong> {{ $venta->fecha }}</li>
    </ul>
</x-mi-layout>