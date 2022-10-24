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
                  url("/img/hab1.jpg");
}
</style>



