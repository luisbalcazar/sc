<?php 
	require_once ("../../backend/models/conexion.php");
	require_once ("../../models/gestorModelos.php");

	require_once ("../../controllers/gestorModelos.php");

class Ajax{

	public function enviarDato(){
	
		$respuesta = ModelosController::seleccionarModelosController();
		echo json_encode($respuesta);
	}

}

$a = new Ajax();

if (isset($_POST["datos"])) {
	$a ->enviarDato();
}

if (isset($_POST["buscar"])) {
	$a ->enviarDato();
}

if (isset($_POST["seleccion"])) {
	$a ->enviarDato();
}

if (isset($_POST["puesto"])) {
	$a ->enviarDato();
}

if (isset($_POST["slider"])) {
	$a ->enviarDato();
}

if (isset($_POST["figure"])) {
	$a ->enviarDato();
}
