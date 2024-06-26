<!DOCTYPE html>
<html>
<head>
    <title>Ver Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">TIENDA SENATI</a>
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

    <<div class="container mt-5">
        <div class="caja">
        <h1>Productos</h1>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($product->image)
                        <img class="card-img-top" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">${{ $product->price }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>