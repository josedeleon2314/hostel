<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />

    

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

         

<br><br>
  <div class="container">
    
    <table  class="table table-bordered " id="venta">
      <thead>
        <tr class="text-center">
          <th width="5%">
            <h3>#</h3>
          </th>
          <th width="5%">
            <h3>Cantidad</h3>
          </th>
          <th width="40%">
            <h3>Fecha Inicial</h3>
          </th>
          <th width="10%">
            <h3>Fecha Final</h3>
          </th>
          <th width="10%">
            <h3>Precio</h3>
          </th>
          <th width ="10%">
            <h3>Precio Total</h3>
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($reportes as $ventas)        
        <td width="5%" align="center">{{$ventas->id}}</td>
        <td width="5%" align="center">{{$ventas->cantidad}}</td>
        <td width="5%" align="center">{{$ventas->fecini}}</td>
        <td width="5%" align="center">{{$ventas->fecfin}}</td>
        <td width="5%" align="center">{{$ventas->valor_uni}}</td>
        <td width="5%" align="center">{{$ventas->valor_total}}</td>





      </tbody>
      @endforeach
      </tbody>
    </table>
  </div>
@endauth
</body>
</html>

<style>
        body{
          

    background-image: 
    /* linear-gradient(rgba(0, 0, 255, 0.5), rgba(255, 255, 0, 0.5)), */
                  url("/img/hab5.jpg");
}
</style>

