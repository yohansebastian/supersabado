<?php

// Arreglos de una dimension Vector
$precios=array("precio1"=>1600,"precio2"=>5000,"precio3"=>2500);
$nombres=array("arroz","salchicha","azucar");
$marca=array("Diana","Zenu","Incauca");

// Arreglos en multiples dimensiones
$productos=array(
    "Producto1"=>array("nombre"=>"Arroz","precio"=>1600,"marca"=>"Diana"),
    "Producto2"=>array("nombre"=>"Salchicha","precio"=>5000,"marca"=>"Zenu"),
    "Producto3"=>array("nombre"=>"Azucar","precio"=>2500,"marca"=>"Incauca")
);

//nombre,precio,marca
print_r($productos);

echo("<br>");
echo("<br>");


foreach($productos as $producto){

    print_r($producto);
    echo("<br>");

}
echo("<br>");
echo("<br>");

foreach($productos as $producto){

    echo($producto["marca"]);
    echo("<br>");

}



?>