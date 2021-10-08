<?php 
require_once("crud.php"); // contine la funcion de obtener datos y editar

$obj = new crud();

$datos = array(
    	$_POST['codigoEdit'],
    	$_POST['nombresEdit'],
    	$_POST['apellidosEdit'],
    	$_POST['direccionEdit'],
    	$_POST['telefonoEdit'], 
    	$_POST['correoEdit'],
    );
	
echo $obj->actualizar($datos);

$nuevaURL = '../index.html';

header("Location: $nuevaURL");
die();
?>