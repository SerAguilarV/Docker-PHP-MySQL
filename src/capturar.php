<?php

    
    $ID = $_GET["ID"];

    $conexion = mysqli_connect("172.18.0.2","root","123","Banco") or die("Error en la conexion de la base de datos");
    echo "<br>Base de datos conectada<br><br>";
    if(strlen($ID)==7 and (strtoupper($ID[0])=="Z" or strtoupper($ID[0])=="S") and is_numeric(substr($ID,1,strlen($ID)))){
        echo "Estructura correcta<br><br>";
        $consulta = "SELECT U.ID, DU.NOMBRE, DU.APELLIDOS, DU.GENERO, U.NIVEL FROM Usuarios U, Datos_Usuarios DU WHERE U.ID = '" . $ID . "' and  DU.ID = U.ID";
        
        if ($res = $conexion->query($consulta)) {
            $cont = $res->num_rows;
            if ($cont == 0){
                echo "No se encontro nada";        
            }
            else{
                while ($fila = $res->fetch_row()) {
                    printf("%s, %s, %s, %s, %s", $fila[0], $fila[1], $fila[2], $fila[3], $fila[4]); 
                }
                $conexion->close();
            }
        }
    }
    else {
        echo "Estructura Incorrecta";
    }
