<?php
    /*$host = "localhost";
    $user = "id20331472_joshua_sgc_2";
    $pass = "sisequeponeR1-";
    $db   = "id20331472_usuarios";

    $conexion =mysqli_connect($host, $user, $pass, $db);

    if(!$conexion){
        echo "fallo la conexion";
    }else
    echo "Felicidades, lo lograste";*/
    
    $conexion = new mysqli("localhost", "id20331472_joshua_sgc_2", "sisequeponeR1-", "id20331472_usuarios");
    if(!$conexion){

        echo "fallo la conexion";
    }/*else{
        echo "Felicidades, lo lograste";
    }*/
?>