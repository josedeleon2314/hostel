<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <form action="/register" method="POST">
        @csrf 
        <div class="simple-login-container">
            <h2>Login Form</h2>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" placeholder="Nombre" name="name" id="name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="password" placeholder="Ingresa un Password" id="password" name="password" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="password" placeholder="Confirma tu Password" id="password_confirmation" name="password_confirmation" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="submit" class="btn btn-block btn-login" value="Registrarse">
                </div>
            </div>
        </div>
    </form>
</body>
</html>


<style>
    body{
    background-color:#5286F3;
    font-size:14px;
    color:#fff;
}
.simple-login-container{
    width:300px;
    max-width:100%;
    margin:50px auto;
}
.simple-login-container h2{
    text-align:center;
    font-size:20px;
}

.simple-login-container .btn-login{
    background-color:#FF5964;
    color:#fff;
}
a{
    color:#fff;
}
</style>