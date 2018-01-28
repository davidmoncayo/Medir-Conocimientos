<?php
	error_reporting(0);
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylo.css">
	<title>contactos</title>
</head>
<body>	
	<div class="contacto">
	
	<h1>
	Bienvenido
		<?php
		if ($_SESSION['Nombre'] == "") {
			header("location:contactodos.php");
		}else{
			echo $_SESSION['Nombre'];
			?>
	<form action="enviado.php" method="POST">
	<label>Asunto</label>
	<p></p>
	<label>Queja</label>
	<input type="radio" name="uno" required>
	<p></p>
	<label>Ideas</label>
	<input type="radio" name="uno" required>
	<p></p>
	<label>consultas</label>
	<input type="radio" name="uno" required>
	<p></p>
	<label>Aportes</label>
	<input type="radio" name="uno" required>
	<p></p>
	<label>Mensaje</label>
	<p></p>
	<textarea name="text" required></textarea required>
	</div>
	<a href="index.php"><button>volver</button></a>
		<input type="submit" name="submit">
			<?php
	}
		?>
		 </h1>
		 		 <h1>CONTÁCTANOS:
    En cali: 3929327
    Numero de celular: 3167863362</h1>
   <h1>Tambien nos encuentras en redes sociales como </h1>
   <h1><a href="www.facebook.com/DavidEvil5/">Facebook</a></h1>
   <h1><a href="www.Twitter.com">Twitter</a></h1>
   <h1><a href="www.Whattsapp-web.com">Whattsapp</a></h1>
   <h1><a href="www.youtobe.com/backtrack-academy/">Youtobe</a></h1>
</form>
</body>
</html>