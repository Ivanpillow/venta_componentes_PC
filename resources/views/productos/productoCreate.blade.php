
<x-mi-layout titulo="Añadir Producto">
    <form class="form-group" action="{{route('producto.store')}}" method="POST">
        @csrf 
        {{--Importante en cada formulario. Es otro input que genera una llave--}}
        <a class="btn btn-info" href="{{route('producto.index')}}">Lista de Productos</a>
        <h1>Nuevo producto</h1>
        <label for="nombre">Nombre: </label>
        <input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
        {{-- @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="descripcion">Descripcion: </label>
        <input class="form-control" type="text" name="descripcion" value="{{old('descripcion')}}">
        {{-- @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="precio">Precio: </label>
        <input class="form-control" type="number" name="precio" value="{{old('precio')}}">
        {{-- @error('precio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="categoria">Categoría: </label>
        <input class="form-control" type="text" name="categoria" value="{{old('categoria')}}">
        {{-- @error('categoria')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="stock">En inventario: </label>
        <input class="form-control" type="number" name="stock" value="{{old('stock')}}">
        {{-- @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="status">Status: </label>
        <input class="form-control" type="number" name="status" value="{{old('status')}}">
        {{-- @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>


        <input class="btn btn-success" type="submit" value="Enviar">

        @include('parciales.form-error')
    </form>
</x-mi-layout>
