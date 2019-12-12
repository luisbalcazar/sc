<?php

require_once "backend/models/conexion.php";

class ArticulosModels{

	public static function seleccionarArticulosModelAC($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id, titulo, introduccion, ruta, contenido FROM $tabla WHERE url = 'cargar-articulos' ORDER BY orden ASC");


		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public static function seleccionarEnlacesArticulosModel($tabla, $enlaces){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE url = :url");

		$stmt->bindParam(":url", $enlaces, PDO::PARAM_STR);

		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);

		$stmt->close();

	}

	#MOSTRAR Categorias en select
	#------------------------------------------------------
	public function mostrarCursos($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idcategoria = 3 AND estado = 1 ORDER BY fecha ASC");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	public static function mostrarPonentes($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idcategoria = 4 AND estado = 1 ORDER BY fecha ASC");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	public static function mostrarArticulo($alias){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM articulos WHERE  url = '$alias' AND estado = 1");

		$stmt -> execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);

		$stmt -> close();

	}


	public static function mostrarBlogs(){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM articulos inner join categorias on categorias.idcategoria= articulos.idcategoria WHERE articulos.estado = 1 AND articulos.idcategoria = 2");

		$stmt -> execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

	}

	public static function mostrarBlog($id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM articulos inner join categorias on categorias.idcategoria= articulos.idcategoria WHERE articulos.estado = 1 AND id = '$id'");

		$stmt -> execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);

		$stmt -> close();

	}

}
