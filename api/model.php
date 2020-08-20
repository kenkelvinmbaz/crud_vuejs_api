<?php
    require "../connection/db.php";
    
    $datos = json_decode(file_get_contents("php://input"));
    $request = $datos->request;
    
    // READ: Leer los registros de la base de datos
    if($request == 1){
      $sql = "SELECT *FROM usuarios";
      $query = $mysqli->query($sql);
        
      $datos = array();
      while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
      }
        
      echo json_encode($datos);
      exit;
    }

    // CREATE: Insertar registro en la base de datos
    if($request == 2) {

      $name = $datos->name;
      $telefone = $datos->telefone;

      $sql_select = "SELECT name FROM usuarios WHERE name='$name'";
      $query_select = $mysqli->query($sql_select);

      if(($query_select->num_rows) == 0) {
        // Inserta los datos correspondientes
        $sql_insert = "INSERT INTO usuarios(name, telefone) VALUES('$name', '$telefone')";
        if($mysqli->query($sql_insert) === TRUE) {
          echo "Save with succed!";
        } else {
          echo "occoreu um problema.";
        }
      } else {
        echo "Ces données existe pas";
      }
      exit;
    }

    // UPDATE: Actualizar el registro de la base de datos
    if($request == 3) {

      $id = $datos->id;
      $name = $datos->name;
      $telefone = $datos->telefone;

      $sql_edit = "UPDATE usuarios SET name='$name', telefone='$telefone' WHERE id='$id'";
      $query_update = $mysqli->query($sql_edit);

      echo "Registre actualisé avec succés";
      exit;
    }

    // DELETE: Borrar registro de la base de datos
    if($request == 4) {
      
      $id = $datos->id;

      $sql_delete = "DELETE FROM usuarios WHERE id='$id'";
      $query_delete = $mysqli->query($sql_delete);

      echo "Registro eliminado.";
      exit;
    }

?>
