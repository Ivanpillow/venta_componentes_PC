<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo producto</title>
</head>
<body>
    <form action="{{route('producto.store')}}" method="POST">
        @csrf 
        {{--Importante en cada formulario. Es otro input que genera una llave--}}
        <a href="{{route('producto.index')}}">Lista de Productos</a>
        <h1>Nuevo producto</h1>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="{{old('nombre')}}">
        {{-- @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="descripcion">Descripcion: </label>
        <input type="text" name="descripcion" value="{{old('descripcion')}}">
        {{-- @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="precio">Precio: </label>
        <input type="number" name="precio" value="{{old('precio')}}">
        {{-- @error('precio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="categoria">Categoría: </label>
        <input type="text" name="categoria" value="{{old('categoria')}}">
        {{-- @error('categoria')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="stock">En inventario: </label>
        <input type="number" name="stock" value="{{old('stock')}}">
        {{-- @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>

        <label for="status">Status: </label>
        <input type="number" name="status" value="{{old('status')}}">
        {{-- @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <br>


        <input type="submit" value="Enviar">

        @include('parciales.form-error')
    </form>
</body>
</html>
