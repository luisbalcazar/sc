<?php 

require_once (realpath(dirname(__FILE__))."/../backend/models/conexion.php");
	
class ModelosModels{

	public function seleccionarFilasModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 1");

		$stmt->execute();

		return $stmt->rowCount();

		$stmt->close();

	}

	public function seleccionarModelosLimiteModel($tabla, $nroLotes, $limit){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla LIMIT $limit, $nroLotes");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function buscarModelosLimiteModel($tabla, $buscador){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE modelo = :buscador");

		$stmt->bindParam(':buscador', $buscador, PDO::PARAM_STR);

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function seleccionarMarcasModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function mostrarMarcasModel($tabla, $seleccion){
		$nroLotes = 2;

		$stmt = Conexion::conectar()->prepare("
			SELECT $tabla.modelo, $tabla.hora, $tabla.dia, $tabla.semana, $tabla.mes, $tabla.puestos, $tabla.maleta, $tabla.tanque, $tabla.ruta FROM $tabla INNER JOIN marcas ON $tabla.idmarca = marcas.idmarca WHERE $tabla.idmarca = $seleccion");
		
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function seleccionarPuestosModel($tabla, $puesto){

		$stmt = Conexion::conectar()->prepare("
			SELECT * FROM $tabla WHERE puestos = $puesto");
		
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function seleccionarFiltroModel($tabla, $slider, $slider2){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE dia BETWEEN $slider AND $slider2");
		
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function mostrarCategoriasModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function seleccionarCategoriasModel($tabla, $figure){

		$stmt = Conexion::conectar()->prepare("
			SELECT * FROM $tabla INNER JOIN modelos_categorias ON $tabla.idmodelos_categorias = modelos_categorias.idmodelos_categorias WHERE $tabla.idmodelos_categorias = $figure");
		
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function seleccionarModelosServiciosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla LIMIT 6");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function seleccionarModelosFooterModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla LIMIT 3");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

}

 ?>