<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( $enlaces == "blog" ||
			$enlaces == "modelos" ||
			$enlaces == "servicios" ||
			$enlaces == "reserve" ||
			$enlaces == "search"){

			$module = "views/modules/".$enlaces.".php";

		}
		else if($enlaces == "index"){
			$module = "views/modules/index.php";
		}else{
			$module = "views/modules/404.php";
		}

		return $module;
		

	}


}