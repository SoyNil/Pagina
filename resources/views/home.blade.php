<!DOCTYPE html>
<html>
<head>
    <title>Hogar</title>
    <link rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <h1 class="navbar-brand">TIENDA SENATI</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.create') }}">Añadir Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.showAll') }}">Eliminar Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.search') }}">Buscar Producto</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
                        @csrf
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Cerrar Sesión</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">¡Bienvenido a la Tienda Senati!</h1>
            <p class="lead">Esta es una aplicación de ejemplo desarrollada con Laravel.</p>
            <hr class="my-4">
            <p>Esta es una página web la cual cree inspirada en una tienda para el trabajo de SENATI. Esta página tiene funciones como "Productos", "Añadir productos", "Eliminar Productos", 
            "Buscar Productos" y "Cerrar Sesión". La funcion "Productos" hace que muestren todos los productos disponibles en la tienda o que hayan agregado los usuarios, la funcióna "Añadir productos"
            nos permite añadir productos a la tienda, la función "Eliminar Productos" nos ayuda a eliminar productos que nosotros hayamos creado y por último la función "Cerrar sesión" hace que cerremos
            la sesión que llevamos e iniciemos en otra cuenta.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Ver Productos</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>