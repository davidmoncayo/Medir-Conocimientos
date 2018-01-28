<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylo.css">
	<title>Perfil</title>
</head>
<div class="iz">
	<a href="modi.html"><button>Actualizar Datos</button></a>
</div>
<body>
	<div class="perfil">
	<label>Nombre</label>
	<h1> <?php echo $_SESSION['Nombre'] ?></h1>
	<label>Apellido</label>
	<h1> <?php echo $_SESSION['Apellido'] ?></h1>
	<label>Sexo</label>
	<h1> <?php echo $_SESSION['Sexo'] ?></h1>
	<label>telefono</label>
	<h1> <?php echo $_SESSION['Telefonico'] ?></h1>
	<label>Correo</label>
	<h1> <?php echo $_SESSION['Correo'] ?></h1>
	<label>Contraseña</label>
	<h1> <?php echo $_SESSION['Contraseña'] ?></h1>
	<br>
	</div>
<a href="index.php"><button>Volver</button></a>
</body>
</form>

</html>