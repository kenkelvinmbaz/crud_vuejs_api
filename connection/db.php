<?php
    
    // Variables de la conexion a la DB
    $mysqli = new mysqli("localhost","root","put_your_password","put_your_database_name");
    
    // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("connection failed");
    } else {
        //echo "Conexion exitosa";
    }
    
?>