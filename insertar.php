
<?php
include('conexio.php');
if((!isset($_POST['nombre']) || empty($_POST['nombre'])) || (!isset($_POST['mensaje']) || empty($_POST['mensaje']))){
  header("Location: index.php?fallo=novalor");
  exit();	
}else{
  $mensaje = mysqli_real_escape_string($conexio, $_POST['mensaje']);
  $insertar = "INSERT INTO missatges(usuari, text, hora) VALUES ('".htmlspecialchars($_POST['nombre'])."', '".htmlspecialchars   ($mensaje)."', '".date("H:i:s")."')";
  if ($conexio->query($insertar) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
