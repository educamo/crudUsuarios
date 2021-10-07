<?php 

    require_once("crud.php"); // contine la funcion de obtener datos y editar

    $obj = new crud();


    echo json_encode($obj->obtendatos($_POST['idcotizacion']));

?>