<?php

    $fruta1='fresa';
    $fruta2='pera';
    $fruta3='manzana';

    $frutas=array('fresa','pera','manzana');
    print_r ($frutas);

    echo "<br/>";

    echo 'En la posicion 2 del array hay '.$frutas[1];
    echo '<br/>';
    foreach($frutas as $indice=>&$valor){
        echo ' '.$frutas[$indice];
    }
    echo '<br/>';
    for($i=0; i<cont($frutas); $i++){
    echo ' '.$frutas[$i];
    }
?>