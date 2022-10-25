<?php
// Paso de parámetros por GET
// http://localhost/ejem03.php?numero=8&nombre=javier
// estoy pasando 2 parametros
// numero = 8
// nombre = javier

$num = $_GET["numero"];
$name = $_GET["nombre"];

if($num >= 0){
    echo "el numero " .$num. " es positivo ";
}else{
    echo "el numero " .$num. " es negativo ";
}

?>