<?php
require_once 'Database.php';
/**
 *
 */
class NewCrud extends Database
{

  function Leer($columnas,$tablas,$condicion = NULL)
  {
    $query = "SELECT $columnas FROM  $tablas"." $condicion";
    $this->conectar();
    $sql = $this->conexion->prepare($query);
    $sql-> execute();
    $encode = json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
    return $encode;
  }

  function Insertar($tabla,array $nombre_columnas,array $datos_columnas)
  {

      $nombre = implode(",",$nombre_columnas);
      $datos = implode(",",$datos_columnas);
      $query = "INSERT INTO $tabla($nombre) VALUES ($datos)";
      $this->conectar();
      $sql= $this->conexion->prepare($query);
      $sql->execute();


  }

  function Eliminar($tablas,$condicion){
    $query = "DELETE FROM $tablas WHERE $condicion";
    $this->conectar();
    $sql= $this->conexion->prepare($query);
    $sql->execute();
  }

  function ContadorColumna($columna,$tablas,$condicion =NULL){
    $query = "SELECT Count('".$columna."') FROM $tablas "." $condicion";
    $this->conectar();
    $n_fila = $this->conexion->prepare($query);
    $n_fila -> execute();
    return  $n_fila -> fetchColumn();
  }
}


 ?>
