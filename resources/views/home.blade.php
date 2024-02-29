<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Home</title>
</head>
<body>
    <h1 class="">Bienvenido a Casa @php
        echo $_SESSION['user']['name'];
    @endphp
    </h1>

    <div class="userr">
        <a href="editUser" class="btnConfirm">Editar perfil</a>
        <form action="closeSession" method="Post">
            @csrf
            <button type="submit" class="btnCancel">Cerrar Sesión</button>
        </form>
    </div>
</body>
</html>