<?php

class TemplateController{

	public function template(){
		

		/*if (strpos(@$_GET["action"], "_")) {
			
				$extracto = explode("_", $_GET["action"]);

				$_GET["action"] = $extracto[0];
				$_GET["model"] = $extracto[1];

			}

		/if(isset($_GET["action"])){

			$enlaces = $_GET["action"];

			if ($enlaces == "home" || $enlaces == "index") {

				include "views/template.php";

			} elseif ($enlaces == "search") {

				include "views/search.php";

			} elseif ($enlaces == "reserve") {

				include "views/reserve.php";

			} elseif ($enlaces == "blog") {

				include "views/template.php";

			} elseif ($enlaces != "index") {
				$articulo = new Articulos();
				$articulo -> enlacesArticulosController($enlaces);

			}

		} else*/		
			include "views/template.php";

		//} 

	}

}


