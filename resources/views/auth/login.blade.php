<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <form action="/login" method="post">
    @csrf
        <div class="simple-login-container">
            <h2>Login Hostel</h2>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="email" class="form-control" placeholder="email" name="email"> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="password" placeholder="Enter your Password"  name="password" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="submit" class="btn btn-block btn-login" value="Login">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                <a href="/register" class="form-control">Registrarme</a>
                </div>
            </div>
        </div>
    </form>
   
   




</body>
</html>

<style>
    body{
    /* background-color:#5286F3;
    font-size:14px;
    color:#fff; */
    background-image: 
    /* linear-gradient(rgba(0, 0, 255, 0.5), rgba(255, 255, 0, 0.5)), */
                  url("/img/hab1.jpg");
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