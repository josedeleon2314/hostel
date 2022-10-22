<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        
        email <br>
        <input type="email" name="email" id=""><br>
        password <br>
        <input type="password" name="password" id=""> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>