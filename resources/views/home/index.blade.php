<!-- <!DOCTYPE html>
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
        <p>Bienvenido  {{Auth::user()->name}} ,Estas LOGEADO</p>
    
        <p><a href="/logout">cerrar session</a> </p>

           
                
    @endauth

    @guest
        <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
    @endguest
</body>

</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <!-- <script type="text/javascript" src="js/contact.js"></script> -->
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
@auth

<meta name="csrf-token" content="{{ csrf_token() }}" />
            <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">Portfolio</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/home">Home</a></li>
                    <li><a href="/reporte">Ventas</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesion</a></li>
                </ul>
                </div>
            </div>
            </nav>

            <div class="jumbotron">
            <div class="container text-center">
                <h1>Habitaciones</h1>      
                <p>Reserva de habitaciones </p>
            </div>
            </div>
            
            <div class="container-fluid bg-3 text-center">    
            <h3>HABITACIONES DISPONIBLES</h3><br>
            <div class="row">
                <div class="col-sm-4">
                <p> <b>Suit Presidencial</b> </p>
                <a href="#contact-modal" data-toggle="modal" name="1"><img src="/img/hab1.jpg" class="img-responsive" style="width:100%" alt="Image" alt="Habitacion Principal"></a>
                </div>
                <div class="col-sm-4"> 
                <p> <b>Emperatriz</b> </p>
                <a href="#contact-modal" data-toggle="modal" name="2"> <img src="/img/hab2.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
                </div>
                <div class="col-sm-4"> 
                <p> <b> Samaland</b></p>
                <a href="#contact-modal" data-toggle="modal" name="3"><img src="/img/hab3.jpg" class="img-responsive" style="width:100%" alt="Image"></a> 
                </div>
            </div>
            </div><br>



                    
        <!-- <div id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal">Show Contact Form</button></div> -->
        <div id="contact-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="close" data-dismiss="modal">×</a>
                        <h3>Contact Form</h3>
                    </div>
                    <form id="contactForm" name="contact" role="form">
                        <div class="modal-body">				
                            <div class="form-group">
                                <label for="cantidad">Cantidad de Personas</label>
                                <input type="text"  name="cantidad" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fecini">fecha inicial</label>
                                <input type="date" name="fecini" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fecfin">fecha final</label>
                                <input type="date" name="fecfin" Class="form-control">
                            </div>		
                            <div class="form-group">
                                <label for="valor_uni">Valor Unico</label>
                                <input type="number" name="valor_uni" id="">
                            </div>			
                            <div class="form-group">
                                <label for="valor_total">Valor Total</label>
                                <input type="number" name="valor_total" id="">
                            </div>	
                        </div>
                        <div class="modal-footer">					
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
                


@endauth
@guest
        <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

<footer class="container-fluid text-center">
  <p>Develover: Jose de leon</p>
</footer>

</body>
</html>

<!-- 
<script>
  $("#miModal").modal("show");
</script> -->

<script>

$(document).ready(function(){	
	$("#contactForm").submit(function(event){
		submitForm();
		return false;
	});
});


function submitForm(){
	 $.ajax({
		type: "POST",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
		url: "/reserva",
		//cache:false,
		data: $('#contactForm').serialize(),
        // data: {
        //     name: $('#name')
        // },
		success: function(response){
            swal({
            title: "Reserva Exitosa!",
            text: "Redirecting in 2 seconds.",
            type: "success",
            timer: 2000,
            showConfirmButton: false
            }, function(){
                window.location.href = "/home";
            });
		},
		error: function(){
			alert("Error");
		}
	});
}
</script>