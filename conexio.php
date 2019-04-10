
<?php
$conexio = mysqli_connect('localhost', 'root', '', 'xat');
if (mysqli_connect_errno()) {
	echo 'Ha fallado la connexion: '.mysqli_connect_error();
}
?>
