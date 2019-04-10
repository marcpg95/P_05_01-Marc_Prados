<?php include('conexio.php'); ?>
<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8" />
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>


<section id="titol">
<h1>xateja-ho!</h1>
</section>
<section id="missatges">

<?php $sql = "select * from missatges order by id desc limit 10";
$result = mysqli_query($conexio, $sql);?>
 <?php while ($row = mysqli_fetch_assoc($result)) {
   echo "<p><span>".$row['hora']." - ".$row['usuari'].": ". $row['text']."</p>";
} ?>
<?php mysqli_close($conexio);?>
</section>
<section id="formulari">
<form method="post" action="insertar.php">
<!-- COMPLETA EL CONTINGUT DEL FORMULARI -->
<form action="insertar.php" method="post">
<p>Su nombre: <input type="text" name="nombre" /></p>
<p>Mensaje: <input type="text" name="mensaje" /></p>
<p><input type="submit" /></p>
</form>
</form>
</section>
<?php
if(isset($_GET['fallo'])){
?>
<section id="errors">
<p>línia per mostrar missatges d'error</p>
<?php if($_GET['fallo']=='novalor'){
echo "Tienes que rellenar todos los campos";

}?>
</section>
<?php
}
?>
</body>
</html>
