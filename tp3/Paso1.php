<?php 
ini_set("display_errors", "on");
session_start();
$_SERVER["DOCUMENT_ROOT"]=dirname(__DIR__);


include_once 'Persona.php';

	
	if(!isset($_SESSION['persona'])){
	
		$_SESSION['persona'] = new Persona();

		$persona->setApellido(' ');
		$persona->setNombre(' ');
		$persona->setNumeroDocumento(0);
		$persona->setTipoDocumento(new TipoDocumento('',' '));
		$persona->setSexo(new Sexo('',' '));
		$persona->setUsuario(new Usuario('',' '));
		$persona->setNacionalidad(' ');
		$persona->setEmail(new Contacto('',' '));
		$persona->setTelefono(new Contacto('',' '));
		$persona->setCelular(new Contacto('',' '));
		$persona->setDomicilio(' ');
	}


if(isset($_POST['bt_paso1'])){
    $_SESSION["nombreUsuario"] = $_POST["nombreUsuario"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["apellido"] = $_POST["apellido"];
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["tipoDocumento"] = $_POST["tipoDocumento"];
    $_SESSION["numeroDocumento"] = $_POST["numeroDocumento"];
    $_SESSION["sexo"] = $_POST["sexo"];
    $_SESSION["nacionalidad"] = $_POST["nacionalidad"];
}



if(isset($_POST['bt_paso1'])){
	    
	//cargar la session persona
	$persona = $_SESSION['persona'];
	//cargar los datos de la session persona
	$persona ['apellido']=$_POST['apellido'];
	$persona ['nombre']=$_POST['nombre'];
	$persona ['numeroDocumento']=$_POST['numeroDocumento'];
	$persona ['tipoDocumento'] = new TipoDocumento($_POST[$aTipoDocumento['id']],$_POST[$aTipoDocumento['nombre']]);
	$persona ['sexo']= new Sexo($_POST[$aSexo['id']],$_POST[$aSexo['nombre']]);
	$persona ['usuario']= new Usuario($_POST['nombreUsuario'],$_POST['password']);
	$persona ['nacionalidad']=$_POST['nacionalidad'];

	



	}




// $_SESSION['oPersona']->setDescripcion($tipoDocumentoDescripcion);

$oTipoDocumentoDNI = new TipoDocumento(1,'DNI');
$oTipoDocumentoLC = new TipoDocumento(2,'LC');
$oTipoDocumentoLE = new TipoDocumento(3,'LE');

$aTipoDocumento = array($oTipoDocumentoDNI,$oTipoDocumentoLC,$oTipoDocumentoLE);


// //Setear nombre de usuario en la persona
// $oPersona->setTipoDocumento($_SESSION['informacion_personal']['tipo_documento']);
// echo $oPersona->getTipoDocumento() . '<br>';

// array con 3 objetos tipoDocumento





// foreach ($aTipoDocumento as $oTipoDocumento)
// {
// 	echo $oTipoDocumento->getIdTipoDocumento() . ' - ' . $oTipoDocumento->getDescripcion() . '<br>';
// 	echo '<br>';
// }

// Crear array con 2 objetos Sexo

$aSexo = array();
$aSexo[] = new Sexo('M','Masculino');
$aSexo[] = new Sexo('F','Femenino');

// foreach ($aSexo as $oSexo)
// {
// 	echo $oSexo->getIdSexo() . ' - ' . $oSexo->getDescripcion() . '<br>';
// 	echo '<br>';
// }

// echo $_SESSION['informacion_personal']['tipo_documento'] . '<br>';

//Crear objeto Persona
// $oPersona = new Persona($_SESSION['informacion_personal']['nombre_usuario'],$_SESSION['informacion_personal']['contrasenia'],$_SESSION['informacion_personal']['apellido'],$_SESSION['informacion_personal']['nombre'],$_SESSION['informacion_personal']['tipo_documento'],$_SESSION['informacion_personal']['numero_documento'],$_SESSION['informacion_personal']['sexo'],$_SESSION['informacion_personal']['nacionalidad']);



// $oPersona->setUsuario($_SESSION[Usuario][]='maycol22',$_SESSION['informacion_personal']['contrasenia']='Espectriñ222o9');
// echo $oPersona->getUsuario() . '<br>';


//Ver datos de la persona
// echo $oPersona->getNombreUsuario() . '<br>';

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
				<li><label>Nombre de Usuario:</label></li>
				<li><input type="text" name="nombre_usuario" value="<?php echo $informacionPersonal['nombre_usuario']; ?>"></li>
				
				<li><label>Contrase&ntilde;a:</label></li>
				<li><input type="password" name="contrasenia" value="<?php echo $informacionPersonal['contrasenia']; ?>"></li>
				
				<li><label>Apellido:</label></li>
				<li><input type="text" name="apellido" value="<?php echo $informacionPersonal['apellido']; ?>"></li>
				
				<li><label>Nombre:</label></li>
				<li><input type="text" name="nombre" value="<?php echo $informacionPersonal['nombre']; ?>"></li>
				
				<li><label>Tipo de Documento:</label></li>
				<li>
					<select name="tipo_documento">

						<option value="DNI" <?php echo  $_SESSION[$oTipoDocumentoDNI]-> getDescripcion()? 'selected="selected"' : '' ; ?>> DNI</option>
						<option value="LC" <?php echo$_SESSION[$oTipoDocumentoLC]-> getDescripcion() ? 'selected="selected"' : '' ; ?>>LC</option>
						<option value="LE" <?php echo $_SESSION[$oTipoDocumentoLE]-> getDescripcion()? 'selected="selected"' : '' ; ?>>LE</option>
					</select>
				</li>
				
				<li><label>N&uacute;mero de Documento:</label></li>
				<li><input type="text" name="numero_documento" value="<?php echo $informacionPersonal['numero_documento']; ?>"></li>
				
				<li><label>Sexo:</label></li>
				<li>
					<label class="radio"><input type="radio" name="sexo" value="M" <?php echo ( $aSexo[0] ) ? 'checked="checked"' : '' ; ?>> Masculino</label>

					<label class="radio"><input type="radio" name="sexo" value="F" <?php echo ( $aSexo[1]) ? 'checked="checked"' : '' ; ?>> Femenino</label>
				</li>
				
				<li><label>Nacionalidad:</label></li>
				<li><input type="text" name="nacionalidad" value="<?php echo $informacionPersonal['nacionalidad']; ?>"></li>
			</ul>
			
			<div class="buttons">
				<input type="submit" name="bt_paso1" value="Siguiente">
			</div>
		</fieldset>
	</form>
	
	<div class="push"></div>
	
</div>

	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/tp3/includes/php/footer.php'; ?>
</body>
</html>

<!-- /* /opt/lampp/htdocs/PHPGugler */ -->