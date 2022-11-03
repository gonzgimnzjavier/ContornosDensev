<?php
 
 //Tengo un array almacenadas mis 3 notas
 //Muestra la nota media final del curso
 $notas=array(10,4);

 array_push($notas, 6);
 $suma=0;

 foreach($notas as $indice=>&$valor){
    $suma = $suma +$valor;
 }

 $media = $suma / count($notas);

 echo 'La nota media final es: '.$media;
 
?>