<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script>
    $(document).ready(function(){
  $("#btn1").click(function(){
    var produc = $("input#producto").val();
      var canti = $("input#cantidad").val();
      var unita=$("input#unit").val();
      var su_to=canti*unita;
     
      
      $("#t2").append( "<tr><td>"+produc+"</td><td>"+canti+"</td><td>"+unita+"</td><td>"+su_to+"</td><td><button type=button id= btn2  class=btn btn-danger >Borrar</button></td></tr>");
      $("input#producto").val("");
      $("input#cantidad").val("");
      $("input#unit").val("");
      

  
});
});

    
    
    
    </script>
</head>
<body style="background-image:url('tienda.jpg')">

<h1 class="text-center" style="color:#42240c"><i> Venta de Productos</i></h1>
<div class="container "style="background:#f7f5dd">

  <div class="row">
  
    <div class="col-sm "  style="border-style: solid; border-color: black; " >
    
    <br>
    <label for="producto">Producto:</label><br>
    <input type="text" id="producto"  placeholder="Ingrese el producto"><br>
    <label for="cantidad">Cantidad:</label><br>
    <input type="text" id="cantidad"  placeholder="Ingrese la cantidad"><br>
    <label for="unit">P.unitario:</label><br>
    <input type="text"  id="unit" name="unit" placeholder="Ingrese precio unitario"><br>
    <br><br>
    
    </div>
    <div class="col-sm " style="border-style: solid; border-color: black;">
    <table class="table table-bordered" id="t2">
  <thead>
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">P.Unit</th>
      <th scope="col">Sub.unit</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>

  
    
    
  </tbody>
</table>

<div class="text-center">
<input type="submit" value="Imprimir" class="btn btn-primary " >
</div>


      
</div>
  </div>
  <button type="button" id="btn1" class="btn btn-primary ">Agregar Producto</button>
</div>




    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>