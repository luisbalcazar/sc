<?php

require_once "../../backend/models/conexion.php";
require_once "../../models/gestorModelos.php";

require_once "../../controllers/gestorModelos.php";


#CLASE Y MÉTODOS
#-------------------------------------------------------------

class Ajax{

	public function gestorModelosAjax($mydata) {

        $respuesta = ModelosController::seleccionarModelosController($mydata);

        echo $respuesta;

	}

}


if(1==1){

	$a = new Ajax();
	$a -> gestorModelosAjax($_POST);

}
