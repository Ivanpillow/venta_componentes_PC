<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/producto">Lista de Productos</a>
    <br>
    <h1>Información</h1>
    {{-- {{ $tipo }} --}}
    @if($tipo == 'admin')
        <h2>Administrador</h2>
        <h4>¡Bienvenido al panel de administración de nuestra tienda de componentes de PC!</h4>
        <p>
            ¡Bienvenido al panel de administración de nuestra tienda de componentes de PC!
            
            Aquí, como administrador, tienes el control total sobre nuestra tienda en línea. Desde la gestión de inventario y la supervisión de ventas hasta la creación de promociones y la atención al cliente, nuestro panel de administración te brinda las herramientas necesarias para llevar tu negocio al máximo nivel.</p>    
    @elseif($tipo == 'cliente')
        <h2>Cliente</h2>
        <h4>¡Bienvenido a nuestra tienda de componentes de PC!</h4>
        <p>Explora nuestra amplia selección de componentes de alta calidad para construir, mejorar o personalizar tu PC según tus necesidades. Desde potentes procesadores y tarjetas gráficas de vanguardia hasta placas base confiables y rápidos SSD, tenemos todo lo que necesitas para llevar tu experiencia de computación al siguiente nivel.</p>
        <p>¡Descubre las últimas tecnologías y encuentra los componentes perfectos para potenciar tu PC hoy mismo!</p>
    @else
        <h4>¡Bienvenido a nuestra tienda de componentes de PC!</h4>
        <p>Explora nuestra amplia selección de componentes de alta calidad para construir, mejorar o personalizar tu PC según tus necesidades. Desde potentes procesadores y tarjetas gráficas de vanguardia hasta placas base confiables y rápidos SSD, tenemos todo lo que necesitas para llevar tu experiencia de computación al siguiente nivel.</p>
        <p>¡Descubre las últimas tecnologías y encuentra los componentes perfectos para potenciar tu PC hoy mismo!</p>
    @endif
</body>
</html>