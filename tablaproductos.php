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
    "Producto1"=>array("nombre"=>"Arroz","precio"=>1600,"marca"=>"Diana"),
    "Producto2"=>array("nombre"=>"Salchicha","precio"=>5000,"marca"=>"Zenu"),
    "Producto3"=>array("nombre"=>"Azucar","precio"=>2500,"marca"=>"Incauca"),
    "Producto4"=>array("nombre"=>"Aceite","precio"=>7000,"marca"=>"Premier")
);
?>


<table class="table table-dark mt-3">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($productos as $producto):?>

        <tr>
            <th scope="row"><?php echo($producto["nombre"])?></th>
            <td><?php echo($producto["marca"])?></td>
            <td><?php echo($producto["precio"])?></td>
      
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