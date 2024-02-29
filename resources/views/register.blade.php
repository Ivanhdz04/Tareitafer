<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Registro</title>
</head>
<body>
    <main class="mainLogin">
        <form class="form" action="join" method="Post">
            @csrf
            <h2>SingUp</h2>
            <div class="boxInput">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Nombre" value="{{old('name')}}">
                @error('name')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="boxInput">
                <label for="email">Correo</label>
                <input type="email" id="email" name="email" placeholder="Correo Electronico" value="{{old('email')}}">
                @error('email')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="boxInput">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña">
                @error('password')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="boxInput">
                <label for="passwordConfirm">Confirmar Contraseña</label>
                <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirma tu contraseña">
                @error('passwordConfirm')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="buttons">
                <button class="btnConfirm" type="submit">Registrarse</button>
            </div>
            <a href="login" class="btnSRgistrarse">Iniciar sesión</a>
        </form>
    </main>
</body>
</html>
