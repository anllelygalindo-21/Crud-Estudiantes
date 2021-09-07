<?php

include("conexion1.php");
$con=conectar();

if(isset($_GET['id_est'])) {
  $id_est = $_GET['id_est'];
  $query = "DELETE FROM estudiantes WHERE id_est='$id_est'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: estudiantes.php"); 
}

?>