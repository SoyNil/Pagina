<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<section class="form-main">
    <div class="form-conte">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
    <div class="box">
        <h2>INICIAR SESIÓN</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-box">
                <input type="email" class="input-control" id="email" name="email" placeholder="Ingrese su correo electrónico" value="{{ old('email') }}" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-control" id="password" placeholder="Ingrese su contraseña" name="password" required>
            </div>
            <button type="submit" class="btn">Iniciar sesión</button>
            </form>
            <p>¿No tienes una cuenta? <a href="{{ route('register') }}" class="gradient-text">Creala aquí</a></p>
            @if ($errors->any())
                <div class="error_msg">
                    <ul>
                @foreach ($errors->all() as $error)
                @if ($error == 'The provided credentials do not match our records.')
                    <li>Los datos ingresados no coinciden con nuestro sistema</li>
                @else
                    <li>{{ $error }}</li>
                @endif
                @endforeach
                    </ul>
                </div>
            @endif
    </div>
    </div>
</section>
</body>
</html>