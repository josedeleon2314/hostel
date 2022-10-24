<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@auth

<br><br>
  <div class="container">
    
    <table  class="table table-bordered table-striped table-hover" id="venta">
      <thead>
        <tr class="text-center">
          <th width="5%">
            <h3>#</h3>
          </th>
          <th width="5%">
            <h3>Cantidad</h3>
          </th>
          <th width="40%">
            <h3>Articulo</h3>
          </th>
          <th width="10%">
            <h3>Cantidad</h3>
          </th>
          <th width="10%">
            <h3>Precio</h3>
          </th>
          <th width ="10%">
            <h3>Acctión</h3>
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($reportes as $ventas)        
        <td width="5%" align="center">{{$ventas->id}}</td>
        <td width="5%" align="center">{{$ventas->cantidad}}</td>


      </tbody>
      @endforeach
      </tbody>
    </table>
  </div>
@endauth
</body>
</html>





