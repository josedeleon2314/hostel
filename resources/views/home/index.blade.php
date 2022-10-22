<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1> Home</h1>

    @auth
        <p>BIENVENIDO ESTAS LOGEADO</p>
    @endauth

    @guest
        <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
    @endguest
</body>
</html>