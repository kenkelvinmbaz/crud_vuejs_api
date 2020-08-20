<?php
    
    // Variables de la conexion a la DB
    $mysqli = new mysqli("localhost","root","123456","keneka_db");
    
    // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("connection failed");
    } else {
        //echo "Conexion exitosa";
    }
    
?>