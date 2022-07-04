<?php
ini_set("display_errors", "on");
require_once 'Persona.php';

session_start();


$persona = (isset($_SESSION['Persona']) == false) ? new Persona() : $_SESSION['Persona'];

$validarContrasenia = false;

if (isset($_POST['bt_paso1']) == true) {
	$usuario = (isset($_POST['nombre_usuario']) == true) ? $_POST['nombre_usuario'] : '';
	$contrasenia = (isset($_POST['contrasenia']) == true) ? $_POST['contrasenia'] : '';
	$apellido = (isset($_POST['apellido']) == true) ? $_POST['apellido'] : '';
	$nombre = (isset($_POST['nombre']) == true) ? $_POST['nombre'] : '';
	$eleccionTipoDocumento = ( isset($_POST['tipo_documento']) == true ) ? $_POST['tipo_documento'] : '';
	$documento = (isset($_POST['numero_documento']) == true) ? $_POST['numero_documento'] : '';
	$eleccionSexo = (isset($_POST['sexo']) == true) ? $_POST['sexo'] : '';
	$nacionalidad = (isset($_POST['nacionalidad']) == true) ? $_POST['nacionalidad'] : '';
	$localidad = (isset($_POST['localidad']) == true) ? $_POST['localidad'] : '';

	$oUsuario = new Usuario($usuario, $contrasenia);
	$_SESSION['persona']->setUsuario( $oUsuario);


	if ($oUsuario->validarContrasenia() == true) {
		$validarContrasenia = true;
		$persona->setUsuario($oUsuario);
	}

	$oMasculino = new Sexo('M', 'Masculino');
	$oFemenino = new Sexo('F', 'Femenino');
	$aSexo = array($oMasculino, $oFemenino);

	$oTipoDNI = new TipoDocumento(1, 'DNI');
	$oTipoLC = new TipoDocumento(2, 'LC');
	$oTipoLE = new TipoDocumento(3, 'LE');
	$aTipoDocumento = array($oTipoDNI, $oTipoLC, $oTipoLE);

	if ($eleccionTipoDocumento == 'DNI') {
		$_SESSION['persona']->setTipoDocumento($oTipoDNI);
	} elseif ($eleccionTipoDocumento == 'LC') {
		$_SESSION['persona']->setTipoDocumento($oTipoLC);
	} elseif ($eleccionTipoDocumento == 'LE') {
		$_SESSION['persona']->setTipoDocumento($oTipoLE);
	}

	if ($eleccionSexo == 'M') {
		$_SESSION['persona']->setSexo($oMasculino);
	} elseif ($eleccionSexo == 'F') {
		$_SESSION['persona']->setSexo($oFemenino);
	}
	$persona->setApellido($apellido);
	$persona->setNombre($nombre);
	$persona->setNumeroDocumento($documento);
	$persona->setNacionalidad($nacionalidad);
	$_SESSION['Persona'] = $persona;
} else {
	$validarContrasenia = true;
}

//Creo el array tipoProvincia con las provncias dentro
$oEntreRios = new Provincia(1, 'Entre Rios');
$oSantaFe = new Provincia(2, 'Santa Fe');
$oCordoba = new Provincia(3, 'Cordoba');
$oBuenosAires = new Provincia(4, 'Buenos Aires');
$oCatamarca = new Provincia(5, 'Catamarca');
$oCorrientes = new Provincia(6, 'Corrientes');
$aProvincias = array($oEntreRios, $oSantaFe, $oCordoba, $oBuenosAires, $oCatamarca, $oCorrientes);


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="ISO-8859-1">
	<title>SGU | Formulario de Inscripc&oacute;n</title>
	<link type="text/css" rel="stylesheet" href="includes/css/estilos.css">
</head>

<body>

	<div class="wraper">

		<?php require_once 'includes/php/header.php'; ?>



		<form action="Paso3.php" method="post">
			<fieldset>
				<legend>Informaci&oacute;n de Contacto:</legend>

				<ul>
					<li><label>Correo electr&oacute;nico:</label></li>
					<li><input type="text" name="email" value="<?php $persona->getEmail()->getValor() ?>"></li>

					<li><label>Tel&eacute;fono:</label></li>
					<li><input type="text" name="telefono" value="<?php $persona->getTelefono()->getValor() ?>"></li>

					<li><label>Celular:</label></li>
					<li><input type="text" name="celular" value="<?php $persona->getCelular()->getValor() ?>"></li>

					<li><label>Domicilio:</label></li>
					<li><input type="text" name="domicilio" value="<?php $persona->getDomicilio() ?>"></li>

					<li><label>Provincia:</label></li>
					<li>
						<select name="provincia">
							<option value="<?php echo ($aProvincias[0]->getDescripcion()); ?> ">Entre Rios</option>
							<option value="<?php echo ($aProvincias[1]->getDescripcion()); ?>">Santa Fe</option>
							<option value="<?php echo ($aProvincias[2]->getDescripcion()); ?>">Cordoba</option>
							<option value="<?php echo ($aProvincias[3]->getDescripcion()); ?>">Buenos Aires</option>
							<option value="<?php echo ($aProvincias[4]->getDescripcion()); ?>">Catamarca</option>
							<option value="<?php echo ($aProvincias[5]->getDescripcion()); ?>">Corrientes</option>
						</select>
						<li><label>Localidad:</label></li>
				<li><input type="text" name="localidad" value="<?php echo $persona->getLocalidad(); ?>"></li>
					</li>
					<!-- <li><label>Localidad:</label></li>
					<li><input type="text" name="localidad" value="
				
					">
					</li> -->

				</ul>

				<div class="buttons">
					<input type="submit" name="bt_paso2" value="Siguiente">
					<input type="button" value="Anterior" onclick="document.location='Paso1.php'">
				</div>
			</fieldset>
		</form>

		<div class="push"></div>

	</div>

	<?php require_once 'includes/php/footer.php'; ?>
</body>

</html>