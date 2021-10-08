<?php 
require_once("crud.php"); // contine la funcion de obtener datos y editar

$obj = new crud();

$datos = array(
    	$_POST['codigo'],
    	$_POST['nombres'],
    	$_POST['apellidos'],
    	$_POST['direccion'],
    	$_POST['telefono'], 
    	$_POST['correo'],
    );


echo $obj->guardar($datos);

$nuevaURL = '../index.html';

header("Location: $nuevaURL");
die();

?>