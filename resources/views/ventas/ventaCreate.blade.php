<x-mi-layout titulo="Crear venta">

    <form class="btn btn-primary" action="{{route('ventas.store')}}" method="POST">
        @csrf 
        {{--Importante el csrf en cada formulario. Es otro input que genera una llave--}}
        <a href="{{route('ventas.index')}}">Lista de Ventas</a>
        <h1>Nueva venta</h1>
        <label for="id_usuario">ID usuario: </label><br>
        <input type="text" name="id_usuario" value="{{old('id_usuario')}}">
        @error('id_usuario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="subtotal">Subtotal: </label><br>
        <input type="number" name="subtotal" value="{{old('subtotal')}}">
        @error('subtotal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="fecha">Fecha: </label><br>
        <input type="text" name="fecha" value="{{old('fecha')}}">
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
</x-mi-layout>
