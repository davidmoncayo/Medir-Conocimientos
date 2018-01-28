<?php
	error_reporting(0);
	session_start();
	$uno = $_POST['uno'];
	$text = $_POST['text'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylo.css">
	<title>enviado con exito</title>
</head>
<body>
		<h1>Mensaje enviado con exito! <?php echo $_SESSION['Nombre'] ?></h1>
		<h1>Gracias por su peticion</h1>
		<?php

		?>
<a href="index.php"><button>Volver al menu</button></a>
</body>
</html>
