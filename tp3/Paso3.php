<?php
ini_set("display_errors", "on");
include_once 'Persona.php';
include_once 'arrays.php';
session_start();

$persona = (isset($_SESSION['Persona']) == false) ? new Persona() : $_SESSION['Persona'];
$validarEmail = false;
$validarTelefono = false;
$validarCelular = false;

if (isset($_POST['bt_paso2']) == true) {
	$email = (isset($_POST['email']) == true) ? $_POST['email'] : '';
	$telefono = (isset($_POST['telefono']) == true) ? $_POST['telefono'] : '';
	$celular = (isset($_POST['celular']) == true) ? $_POST['celular'] : '';
	$domicilio = (isset($_POST['domicilio']) == true) ? $_POST['domicilio'] : '';
	$eleccionProvincia = ( isset($_POST['provincia']) == true ) ? $_POST['provincia'] : '';
	$localidad = (isset($_POST['localidad']) == true) ? $_POST['localidad'] : '';




	$oEmail = new Contacto(Contacto::TIPO_EMAIL, $email);
	if ($oEmail->validar() == true) {
		$validarEmail = true;
		$persona->setEmail($oEmail);
	}

	$oTelefono = new Contacto(Contacto::TIPO_TELEFONO, $telefono);
	if ($oTelefono->validar() == true) {
		$validarTelefono = true;
		$persona->setTelefono($oTelefono);
	}

	$oCelular = new Contacto(Contacto::TIPO_TELEFONO, $celular);
	if ($oCelular->validar() == true) {
		$validarCelular = true;
		$persona->setCelular($oCelular);
	}

	if($eleccionProvincia=='Entre Rios'){
		$_SESSION['persona']->setProvincia($oEntreRios);
	}elseif ($eleccionProvincia == 'Santa Fe') {
		$_SESSION['persona']->setProvincia($oSantaFe);
	}elseif($eleccionProvincia=='Cordoba'){
		$_SESSION['persona']->setProvincia($oCordoba);
	}elseif($eleccionProvincia=='Buenos Aires'){
		$_SESSION['persona']->setProvincia($oBuenosAires);
	}elseif($eleccionProvincia=='Catamarca'){
		$_SESSION['persona']->setProvincia($oCatamarca);
	}elseif($eleccionProvincia=='Corrientes'){
		$_SESSION['persona']->setProvincia($oCorrientes);
	}

	foreach ( $aProvincia as $oProvincia )
	{
		if ( $oProvincia->getIdProvincia() == $eleccionProvincia )
		{
			$validarProvincia = true;
			$persona->setProvincia($oProvincia);
		}
	}


	// $persona ->setProvincia($provincia);
	$persona->setDomicilio($domicilio);
	$persona->setLocalidad($localidad);
	$_SESSION['Persona'] = $persona;
}
 else
{
 $validarCelular = true;
 $validarTelefono = true;
	$validarEmail = true;


}




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
		<?php if ($validarEmail == false) { ?>
			<li>El correo electrónico no es válido. Debe contener un símbolo "@"</li>
		<?php } else { ?>

			<h2>Informaci&oacute;n de alta de usuario</h2>

			<div class="ultimo_paso">

				<fieldset>
					<legend>Informaci&oacute;n Personal:</legend>

					<ul>
						<li><label>Nombre de Usuario:</label></li>
						<li><?= $persona->getUsuario()->getNombre() ?><br></li>

						<li><label>Contrase&ntilde;a:</label></li>
						<li><?= $persona->getUsuario()->getContraseniaEnmascarada() ?><br></li>


						<li><label>Apellido:</label></li>
						<li><?= $persona->getApellido() ?></li>

						<li><label>Nombre:</label></li>
						<li><?= $persona->getNombre() ?></li>

						<li><label>Tipo de Documento:</label></li>
						<li><?= $persona->getTipoDocumento()->getDescripcion() ?></li>

						<li><label>N&uacute;mero de Documento:</label></li>
						<li><?= $persona->getNumeroDocumento() ?></li>

						<li><label>Sexo:</label></li>
						<li><?= $persona->getSexo()->getDescripcion() ?></li>

						<li><label>Nacionalidad:</label></li>
						<li><?= $persona->getNacionalidad() ?></li>
					</ul>

				</fieldset>

				<fieldset>
					<legend>Informaci&oacute;n de Contacto:</legend>

					<ul>
						<li><label>Correo electr&oacute;nico:</label></li>
						<li><?= $persona->getEmail()->getValor() ?></li>

						<li><label>Tel&eacute;fono:</label></li>
						<li><?= $persona->getTelefono()->getValor() ?></li>

						<li><label>Celular:</label></li>
						<li><?= $persona->getCelular()->getValor() ?></li>
						
						<li><label>Domicilio:</label></li>
						<li><?= $persona->getDomicilio() ?></li>

						<li><label>Provincia:</label></li>
						<li><?= $persona->getProvincia()->getDescripcion() ?></li>

						<li><label>Localidad:</label></li>
						<li><?= $persona->getLocalidad() ?></li>
					</ul>

				</fieldset>

				<fieldset>

					<div class="buttons">
						<input type="button" value="Guardar" onclick="document.location='Finalizar.php'">
						<input type="button" value="Anterior" onclick="document.location='Paso2.php'">
					</div>

				</fieldset>

			</div>
		<?php } ?>
		<div class="push"></div>

	</div>

	<?php require_once 'includes/php/footer.php'; ?>
</body>

</html>