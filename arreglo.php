<?php 

//Arreglo indexado
$productos=array("lentejas","papa","huevos","carne");
print_r($productos);
echo("<br>");
echo($productos[1]);

// Arreglos Asociativos
echo("<br>");
echo("<br>");
$productosAsociativos=array("producto1"=>"lentejas","producto2"=>"papa","producto3"=>"huevos","producto4"=>"carne");
print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto2"]);

//Bucle For
echo("<br>");
echo("<br>");

for($centinela=0; $centinela<count($productos); $centinela++){

    echo($productos[$centinela]);
    echo("<br>");

}

//Bucle foreach
echo("<br>");
echo("<br>");
foreach($productosAsociativos as $clave=>$valor){

    echo($clave."--".$valor);
    echo("<br>");

}

foreach($productos as$valor){

    echo($valor);
    echo("<br>");

}









?>