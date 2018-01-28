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
	$_SESSION['Nombre'] = $_POST['Nombre'];
	$_SESSION['Apellido'] = $_POST['Apellido'];
	$_SESSION['Sexo'] = $_POST['Sexo'];
	$_SESSION['Correo'] = $_POST['Correo'];
	$_SESSION['Telefonico'] = $_POST['Telefonico'];
	$_SESSION['Contraseña'] = $_POST['Contraseña'];
	$_SESSION['rContraseña'] = $_POST['rContraseña'];

	$mensaje .= vacio($_POST['Nombre'], 'el campo Nombre esta vacio');
	$mensaje .= vacio($_POST['Apellido'], 'el campo Apellido esta vacio');
	$mensaje .= vacio($_POST['Sexo'], 'el campo Sexo esta vacio');
	$mensaje .= vacio($_POST['Correo'], 'el campo Correo esta vacio');
	$mensaje .= vacio($_POST['Telefonico'], 'el campo Telefonico esta vacio');
	$mensaje .= numeros($_POST['Telefonico'], 'El campo Telefonico ingrece solo numeros');
	$mensaje .= sololetras($_POST['Nombre'], 'el campo Nombre ingrece solo letras');
	$mensaje .= sololetras($_POST['Apellido'], 'el campo Apellido solo ingrece letras');


	if (arrobas($_SESSION['Correo']) == 0) {
			$mensaje .= ('Ingrece un correo valido');
		}

	if ($mensaje != "") {?>
			<script type="text/javascript">
				alert('<?php echo $mensaje ?>');
				window.location = "secion.html";
			</script>

			<?php
		}else{
			header("location:index.php");
		}
	
?>