<?php

include('conexion.php');

//Nueva instancia de Conexion
$c = new Conexion();

//Recibe Formulario
if (!empty($_POST['descripcion']) && !empty($_POST['prioridad'])) {
	$desc = $_POST['descripcion'];
    $prio = $_POST['prioridad'];
    $id = null;

	//Inserta Registro
	$c->insertar($desc, $prio);
}

//Redireccionamiento
header('Location: Consulta.php');

?>