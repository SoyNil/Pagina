<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
            <h2>REGISTRAR USUARIO</h2>
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-box">
                <input type="text" class="input-control" id="name" name="name" placeholder="Ingrese su nombre de usuario" value="{{ old('name') }}" required>
            </div>
            <div class="input-box">
                <input type="email" class="input-control" id="email" name="email" placeholder="Ingrese su correo electrónico" value="{{ old('email') }}" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme su contraseña"required>
            </div>
            <button type="submit" class="btn">Registrarse</button>
            </form>
            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="gradient-text">Inicie su sesión aquí</a></p>
            
            @if ($errors->any())
            <div class="error_msg">
            <ul>
            @foreach ($errors->all() as $error)
                <li>
                    @if ($error == 'The email has already been taken.')
                        El correo electrónico ya está en uso. Por favor, prueba con otro.
                    @elseif ($error == 'The password field must be at least 8 characters.')
                        La contraseña debe tener al menos 8 caracteres.
                    @elseif ($error == 'The password field confirmation does not match.')
                        Las contraseñas ingresadas no coinciden
                    @else
                        {{ $error }}
                    @endif
                </li>
                @endforeach
                </ul>
            </div>
            @endif
            
        </div>
    </div>
</section>
</body>
</html>