<?php
	session_start();
	error_reporting(0);

function vacio($dato, $mensaje){
		if (isset($dato)) {
			if (empty($dato)) {
				$texto = $mensaje.'\\n';
				return $texto;
			}
		}
	}
	function numeros($dato, $mensaje){
		if (isset($dato)) {
	if (!is_numeric($dato)) {
				$texto = $mensaje.'\\n';
				return $texto;
			}
		}
	}
	function arrobas($string){
    $string = preg_match_all('/([@]{1})/',$string,$foo);
    return $string;
}
function sololetras($dato, $mensaje){
		if (isset($dato)) {
	if (is_numeric($dato)) {
				$texto = $mensaje.'\\n';
				return $texto;
			}
		}
	}

$num1 = $_POST['num1'];
	$mensaje .= ('El dato ingresado tiene varias @');


	$mensaje = "";
	$_SESSION['Nombre'] = $_POST['nom'];
	$_SESSION['Apellido'] = $_POST['ape'];
	$_SESSION['Sexo'] = $_POST['sex'];
	$_SESSION['Correo'] = $_POST['cor'];
	$_SESSION['Telefonico'] = $_POST['tel'];
	$_SESSION['Contraseña'] = $_POST['con'];

	$mensaje .= vacio($_POST['nom'], 'el campo Nombre esta vacio');
	$mensaje .= vacio($_POST['ape'], 'el campo Apellido esta vacio');
	$mensaje .= vacio($_POST['sex'], 'el campo Sexo esta vacio');
	$mensaje .= vacio($_POST['cor'], 'el campo Correo esta vacio');
	$mensaje .= vacio($_POST['tel'], 'el campo Telefonico esta vacio');
	$mensaje .= numeros($_POST['tel'], 'El campo Telefonico ingrece solo numeros');
	$mensaje .= sololetras($_POST['nom'], 'el campo Nombre ingrece solo letras');
	$mensaje .= sololetras($_POST['ape'], 'el campo Apellido solo ingrece letras');


	if (arrobas($_SESSION['Correo']) == 0) {
			$mensaje .= ('Ingrece un correo valido');
		}

	if ($mensaje != "") {?>
			<script type="text/javascript">
				alert('<?php echo $mensaje ?>');
				window.location = "modi.html";
			</script>

			<?php
		}else{
			header("location:perfil.php");
		}
	
?>


























































<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylo.css">
	<title>Actualizar datos</title>
</head>
<body>

</body>
</html>