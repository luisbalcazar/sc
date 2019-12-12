<?php

class EnlacesModels{

	public static function enlacesModel($enlaces){

		if($enlaces == "inicio" ||
		   $enlaces == "ingreso" ||
		   $enlaces == "slide" ||
		   $enlaces == "articulos" ||
		   $enlaces == "articulosAgregar" ||
		   $enlaces == "articulosEditar" ||
		   $enlaces == "menu" || //agregue el enlace hacia menú
		   $enlaces == "galeria" ||
		   $enlaces == "videos" ||
		   $enlaces == "suscriptores" ||
		   $enlaces == "ordenes" ||
		   $enlaces == "mensajes" ||
		   $enlaces == "perfil" ||
		   $enlaces == "inscripciones" ||
		   $enlaces == "archivos" ||
		   $enlaces == "modelos" ||
		   $enlaces == "modelosAgregar" ||
		   $enlaces == "modelosEditar" ||
		   $enlaces == "salir"){

			$module = "views/modules/".$enlaces.".php";
		}	

		else if($enlaces == "index"){
			$module = "views/modules/ingreso.php";
		}

		else{
			$module = "views/modules/ingreso.php";		
		}

		return $module;

	}


}