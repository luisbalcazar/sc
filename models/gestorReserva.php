<?php

class reservaModel{

	#REGISTRO MENSAJES
	#-----------------------------------------------------------

	public static function registroReservaModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`nombre`, `email`, `telefono`, `direccion`, `pago`, `notes`, `finicio`, `ffin`, `lugar1`, `lugar2`, `duracion`, `dias`, `subtotal`, `cargos`, `total`) VALUES (:nombre, :email, :telefono, :direccion, :pago, :notes, :inicio, :fin, :lugar1, :lugar2, :duracion, :dias, :subtotal, :cargos, :total)");

		$fechainicio = fechas::tomysqlSL($datos["fechainicio"], PDO::PARAM_STR);
		$fechafin = fechas::tomysqlSL($datos["fechafin"], PDO::PARAM_STR);

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":telefono", $datos["phone"], PDO::PARAM_STR);
		$stmt -> bindParam(":direccion", $datos["address"], PDO::PARAM_STR);
		$stmt -> bindParam(":pago", $datos["payment"], PDO::PARAM_STR);
		$stmt -> bindParam(":notes", $datos["notes"], PDO::PARAM_STR);
		$stmt -> bindParam(":inicio", $fechainicio);
		$stmt -> bindParam(":fin",$fechafin);
		$stmt -> bindParam(":lugar1", $datos["locPickup"], PDO::PARAM_STR);
		$stmt -> bindParam(":lugar2", $datos["locDropoff"], PDO::PARAM_STR);
		$stmt -> bindParam(":duracion", $datos["duration"], PDO::PARAM_STR);
		$stmt -> bindParam(":dias", $datos["days"], PDO::PARAM_STR);
		$stmt -> bindParam(":subtotal", $datos["subtotal"], PDO::PARAM_STR);
		$stmt -> bindParam(":cargos", $datos["cargos"], PDO::PARAM_STR);
		$stmt -> bindParam(":total", $datos["total"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";
		}
		else{

			return "error";
		}

		$stmt->close();

	}

	
}