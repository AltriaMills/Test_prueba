<?php 

if(!empty($_POST["registro"])){
    if(empty($_POST["nombre"]) or empty($_POST["usuario"]) or empty($_POST["clave"])){
        echo '<div *Uno de los campos esta vacio </div>';
    } else {
        $nombre=$_POST["nombre"];
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $sql=$conexion->query("insert into usuario(nombre,usuario,clave)values('$nombre','$usuario','$clave')");
        if($sql==1) {
            echo '<div Cuenta registrada </div>';
        } else {
            echo '<div Error en el registro </div>';
        }
    }

}
?>