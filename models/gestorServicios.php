<?php 

require_once (realpath(dirname(__FILE__))."/../backend/models/conexion.php");

class ServiciosModel{

	public function galeriaModel($tabla){
		
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}



}


 ?>