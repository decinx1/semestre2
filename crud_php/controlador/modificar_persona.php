<?php

if (!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];
        $sql=$conexion->query("update persona set nombre='$nombre', apellido='$apellido',dni=$dni,fecha=$fecha,correo='$correo' where id_persona=$id ");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger' >Error al modificar producto </div>";

        }
        
        
    } else {
        echo "<div class='alert alert-warning' >campos vacios </div>";
    }
}

?>