<?php 

include_once 'Persona.php';
include_once 'arrays.php';

ini_set("display_errors", "on");
session_start();


$_SERVER["DOCUMENT_ROOT"]=dirname(__DIR__);




$persona = new Persona();
	
 $_SESSION['persona'] = $persona;


 $persona->setNombre(' ');
 $persona->setApellido(' ');
 $persona->setNumeroDocumento(0);
 $persona->setSexo(new Sexo('',''));
 $persona->setNacionalidad(' ');
 $persona -> setTipoDocumento(new TipoDocumento('',''));
 $persona->setEmail(new Contacto('',''));
 $persona->setTelefono(new Contacto('',''));
 $persona->setCelular(new Contacto('',''));
$persona ->setContrasenia(new Usuario('',''));
$persona ->setNombreUsuario(new Usuario('',''));



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

	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/tp3/includes/php/header.php'; ?>
	
	<form action="Paso2.php" method="post">
		<fieldset>
			<legend>Informaci&oacute;n Personal:</legend>
			
			<ul>
			<li><label>Nombre:</label></li>
				<li><input type="text" name="nombre" value="<?php echo $persona-> getNombre(); ?>"></li>
				<li><label>Apellido:</label></li>
				<li><input type="text" name="apellido" value="<?php echo $persona -> getApellido(); ?>"></li>
				<li><label>Nombre de Usuario:</label></li>
				<li><input type="text" name="nombre_usuario" value="<?php echo $persona-> getUsuario() -> getNombre() ?>"></li>
				
				<li><label>Contrase&ntilde;a:</label></li>
				<li><input type="password" name="contrasenia" value="<?php echo $persona ->getUsuario() -> getContrasenia()?>"></li>
				<li><label>Tipo de Documento:</label></li>
				<li>
				<select name="tipo_documento">
						<?php foreach ( $aTipoDocumento as $oTipoDocumento ) { ?>
						<option value="<?= $oTipoDocumento->getIdTipoDocumento() ?>" <?= ( $persona->getTipoDocumento()->getIdTipoDocumento() == $oTipoDocumento->getIdTipoDocumento() ) ? 'selected="selected"' : ''  ?>><?= $oTipoDocumento->getDescripcion() ?></option>
						<?php } ?>
					</select>
				</li>
				<li><label>N&uacute;mero de Documento:</label></li>
				<li><input type="text" name="numero_documento" value="<?php echo $persona -> getNumeroDocumento() ?>"></li>
					
				<li><label>Sexo:</label></li>
				
				<li>
					<?php foreach ( $aSexo as $oSexo ) { ?>
					<label class="radio"><input type="radio" name="sexo" value="<?= $oSexo->getIdSexo() ?>" <?= ( $persona->getSexo()->getIdSexo() == $oSexo->getIdSexo() ) ? 'checked="checked"' : ''  ?>> <?= $oSexo->getDescripcion() ?></label>
					<?php } ?>

				</li>
				

				<li><label>Nacionalidad:</label></li>
				<li><input type="text" name="nacionalidad" value="<?php echo $persona ->getNacionalidad() ?>"></li>
			</ul>
			
			<div class="buttons">
				<input type="submit" name="bt_paso1" value="Siguiente"> 
			</div>
		</fieldset>
	</form>

	
</div>

	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/tp3/includes/php/footer.php'; ?>
</body>
</html>

<!-- /* /opt/lampp/htdocs/PHPGugler */ --