<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<main>

<?php

$productos=array(
    "Cliente1"=>array("cedula"=>34677865,"Nombre"=>"Juan","Apellido"=>"Gonzalez","telefono"=>434552,"edad"=>20),
    "Cliente2"=>array("cedula"=>43477688,"Nombre"=>"Ana","Apellido"=>"Florez","telefono"=>876565,"edad"=>56),
    "Cliente3"=>array("cedula"=>1041232472,"Nombre"=>"Daniel","Apellido"=>"Paniagua","telefono"=>234512,"edad"=>34),
    "Cliente4"=>array("cedula"=>70164673,"Nombre"=>"Pedro","Apellido"=>"Gil","telefono"=>7865432,"edad"=>15),
    "Cliente5"=>array("cedula"=>1010030876,"Nombre"=>"Diana","Apellido"=>"Sotto","telefono"=>127654,"edad"=>27)
);
?>


<table class="table table-dark mt-3">
  <thead>
    <tr>
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Edad</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($productos as $producto):?>

        <tr>
            <th scope="row"><?php echo($producto["cedula"])?></th>
            <td><?php echo($producto["Nombre"])?></td>
            <td><?php echo($producto["Apellido"])?></td>
            <td><?php echo($producto["telefono"])?></td>
            <td><?php echo($producto["edad"])?></td>
      
        </tr>
    <?php endforeach ?>




  </tbody>
</table>

</main>









<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>