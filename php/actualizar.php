<?php 
require_once("crud.php"); // contine la funcion de obtener datos y editar

$obj = new crud();

$datos = array(
    	$_POST['id_cotizacion'],
    	$_POST['numero_cotizacion'],
    	$_POST['atencion'],
    	$_POST['mail'],
    	$_POST['fecha'], 
    	$_POST['tel1'],
    	$_POST['empresa'],
    	$_POST['tel2'],
    	$_POST['condiciones'],
    	$_POST['validez'],
    	$_POST['entrega'],
    	$_POST['activo'],

    );


echo $obj->actualizar($datos);

?>