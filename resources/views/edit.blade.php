<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Edit</title>
</head>
<body>
    <main class="mainLogin">
        <form class="form" action="edittingUser" method="Post">
            @csrf
            <h2>Edita tu perfil</h2>
            <input type="hidden" name="id" value="{{$consulta[0]['id']}}">
            <input type="hidden" name="nameOld" value="{{$consulta[0]['name']}}">
            <input type="hidden" name="emailOld" value="{{$consulta[0]['email']}}">
            <input type="hidden" name="passwordOld" value="@php echo $_SESSION['user']['password'] @endphp">
            <div class="boxInput">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Name" value="{{$consulta[0]['name']}}">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="boxInput">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Email" value="{{$consulta[0]['email']}}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="boxInput">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" value="@php echo $_SESSION['user']['password'] @endphp">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="boxInput">
                <label for="">Password Confirm</label>
                <input type="password" name="passwordConfirm" placeholder="Password Confirm">
                @error('passwordConfirm')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="buttons">
                <button class="btnConfirm" type="submit">Editar</button>
            </div>
            <a href="home" class="btnSRgistrarse">Volver a Home</a>
        </form>
    </main>
</body>
</html>
