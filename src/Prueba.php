<?php

    $mensaje = "Hola mundo! <br>";
     
    for ($i=1; $i <= 10; $i++) { 
        if ($i%2 == 0) {
            echo $mensaje . " - " . $i ;
        }
    }
    echo "<br>";

    $arr = [1,2,3,4,5];
    foreach ($arr as $key => $value) {
        echo $key . " - " . $value . "<br>";
    }

    function primeraFunc($texto){
        return $texto . " 'Pasado por function' ";
    }

    echo "<br>";
    $tx = "Prueba";
    echo $tx;
    echo "<br>";
    echo primeraFunc($tx);



?>