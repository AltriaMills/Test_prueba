<?php

class Conexion{

    public function getConexion(){
        $cnx = new PDO("mysql:host=localhost; dbname=registro usuarios", "root", "");
        return $cnx;
    }
}

?>

<!-- <?php

/* $conexion= new mysql("localhost", "root", "", "login", "3306");
$conexion->set_charset("utf8");  */


/* $conexion= new PDO("mysql:host=localhost; dbname=prueba", "root", "");
$conexion->set_charset("utf8");
    return $cnx; */

?> -->