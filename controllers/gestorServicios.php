<?php 

class ServiciosController{

	public function galeriaController(){
		$respuesta = ServiciosModel::galeriaModel("galeria");

		

		foreach ($respuesta as $row => $item) {
			switch ($item["id"]) {
				case '10':
					$filtro = 'mercedes';
					break;
				case '11':
					$filtro = 'top';
					break;
				case '12':
					$filtro = 'new';
					break;
				case '13':
					$filtro = 'sale';
					break;
				case '14':
					$filtro = 'ferrari';
					break;
				case '15':
					$filtro = 'mercedes';
					break;
				case '16':
					$filtro = 'new';
					break;
				case '17':
					$filtro = 'mercedes';
					break;
				case '18':
					$filtro = 'top';
					break;
				case '22':
					$filtro = 'ferrari';
					break;
				
			}

			  echo '<li class="b-isotope-grid__item grid-item '.$filtro.'">
                        <a class="b-isotope-grid__inner js-zoom-images" href="backend/'.substr($item["ruta"],6).'">
                            <img src="backend/'.substr($item["ruta"],6).'" alt="foto" id="'.$item["id"].'"/><span class="b-isotope-grid__wrap-info helper"><span class="b-isotope-grid__info"><i class="icon fa fa-search"></i><span class="b-isotope-grid__title">porsche panamera 2018</span></span>
                            </span>
                        </a>
                    </li>';
		}
	}

}

 ?>