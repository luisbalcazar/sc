<?php
class MenuController{

	#GUARDAR ARTICULO
	#-----------------------------------------------------------

		#MOSTRAR MENUS EN LA VISTA
	#------------------------------------------------------------
	public function mostrarMenuController(){

		$respuesta = MenuModel::mostrarMenuModel("menu");
		foreach ($respuesta as $row => $item){

			echo '
				<li><a href="'.$item["enlace"].'">'.utf8_encode($item["menu"]).'</a></li>';
						

		}

	}

}