<?php 

    require_once("crud.php"); // contine la funcion de obtener datos y editar

    $obj = new crud();



    echo  $obj->eliminar($_GET['id']);

    $nuevaURL = '../index.html';

    header("Location: $nuevaURL");
die();

?>