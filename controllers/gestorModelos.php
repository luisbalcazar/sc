<?php 
error_reporting(0);
class ModelosController{

	public function seleccionarModelosController(){

		$paginaActual = "";
		if (isset($_POST["datos"])) {
			$paginaActual = $_POST["datos"];
		}

		$respuesta = ModelosModels::seleccionarFilasModel("modelos");

		$nroLotes = 6;
	    $nroPaginas = ceil($respuesta/$nroLotes);
	    $lista = '';
	    $tabla = '';

	    if($paginaActual > 1){
        	$lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
	    }
	    for($i=1; $i<=$nroPaginas; $i++){
	        if($i == $paginaActual){
	            $lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
	        }else{
	            $lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
	        }
	    }

	    if($paginaActual < $nroPaginas){
	        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual+1).');">Siguiente</a></li>';
	    }

	    if($paginaActual <= 1){
  			$limit = 0;
	  	}else{
	  		$limit = $nroLotes*($paginaActual-1);
	  	}

	  	if (isset($_POST["buscar"])) {
	  		$buscador = $_POST["buscar"];
	  		$respuesta2 = ModelosModels::buscarModelosLimiteModel("modelos", $buscador);
	  	} elseif (isset($_POST["seleccion"])) {
	  		if($_POST["seleccion"]==0){
	  			$respuesta2 = ModelosModels::seleccionarModelosLimiteModel("modelos",$nroLotes, $limit);
	  		}else{
	  			$seleccion = $_POST["seleccion"];
	  			$respuesta2 = ModelosModels::mostrarMarcasModel("modelos", $seleccion);
	  		}
	  	} elseif (isset($_POST["puesto"])) {
	  		if ($_POST["puesto"]=="All") {
	  			$respuesta2 = ModelosModels::seleccionarModelosLimiteModel("modelos",$nroLotes, $limit);
	  		}else{
	  			$puesto = $_POST["puesto"];
	  			$respuesta2 = ModelosModels::seleccionarPuestosModel("modelos", $puesto);
	  		}
	  	} elseif (isset($_POST["slider"])) {
	  		$slider = $_POST["slider"];
	  		$slider2 = $_POST["slider2"];
	  		$respuesta2 = ModelosModels::seleccionarFiltroModel("modelos", $slider, $slider2);
	  	} elseif (isset($_POST["figure"])) {
	  		$figure = $_POST["figure"];
	  		$respuesta2 = ModelosModels::seleccionarCategoriasModel("modelos", $figure);
	  	} else{
	  		$respuesta2 = ModelosModels::seleccionarModelosLimiteModel("modelos",$nroLotes, $limit);	  		
	  	}

	  	if ($respuesta2 != 0 || $respuesta2 != "" || $respuesta2 != null) {	
	  		foreach($respuesta2 as $row => $item ){

		 	 $tabla = $tabla.'<section class="b-goods-1">
                    <div class="row">
                        <div class="b-goods-1__img">
                            <a class="js-zoom-images" href="backend/'.$item["ruta"].'">
                                <img class="img-responsive" src="backend/'.$item["ruta"].'" alt="foto" />
                        	</a>
                        </div>
                        <div class="b-goods-1__inner">
                            <div class="b-goods-1__header">
                            	<span class="b-goods-1__price hidden-th">$'.$item["dia"].'<span class="b-goods-1__price-msrp">Daily rent</span></span>
                            	<a class="b-goods-1__choose hidden-th" href="#"><i class="icon fa fa-heart-o"></i></a>
                                <h2 class="b-goods-1__name"><a href="#">'.$item["modelo"].'</a></h2>
                            </div>
                            
                            <div class="b-goods-1__section">
                                <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                <div class="collapse in" id="desc-1">
                                    <ul class="b-goods-1__desc list-unstyled">
                                        <li class="b-goods-1__desc-item">Seats: '.$item["puestos"].'</li>
                                        <li class="b-goods-1__desc-item"><span class="hidden-th">Trunk:</span> '.$item["maleta"].'</li>
                                        <li class="b-goods-1__desc-item">Auto</li>
                                        <li class="b-goods-1__desc-item hidden-th">Tank: '.$item["tanque"].'</li>
                                    </ul>
                                </div>
                        	</div>
	                        <div class="b-goods-1__section hidden-th">
	                            <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
	                            <div class="collapse in" id="list-1">
	                                <ul class="b-goods-1__list list list-mark-5 list_mark-prim">
	                                    <li class="b-goods-1__list-item">Engine DOHC 24-valve V-6</li>
	                                    <li class="b-goods-1__list-item">Audio Controls on Steering Wheel</li>
	                                    <li class="b-goods-1__list-item">Power Windows</li>
	                                    <li class="b-goods-1__list-item">Daytime Running Lights</li>
	                                    <li class="b-goods-1__list-item">Cruise Control, ABS</li>
	                                </ul>
	                            </div>
	                        </div>
                        </div>
                    </div>
              		</section>';

			}
	  	}else{
	  		$tabla = $tabla."<h2>Ops! We couldnt find the model.</h2>";
	  	}

		$array = array(0 => $tabla,
    			   1 => $lista);

		//var_dump($array);

    	return $array;

	}

	public function seleccionarMarcasController(){

		$respuesta = ModelosModels::seleccionarMarcasModel("marcas");

		foreach($respuesta as $row => $item ){
			echo '<option value="'.$item["idmarca"].'">'.$item["marca"].'</option>';
		}
		
	}

	public function mostrarCategoriasController(){

		$respuesta = ModelosModels::mostrarCategoriasModel('modelos_categorias');

		foreach ($respuesta as $row => $item) {

			switch ($item["modelo_categoria"]) {
				case 'ECONOMY':
					$icon = "flaticon-sedan-car-model";
					break;
				case 'SUV':
					$icon = "flaticon-car-of-hatchback-model";
					break;
				case 'COMPACT':
					$icon = "flaticon-coupe-car";
					break;
				case 'INTERMIDIATE':
					$icon = "flaticon-car-of-hatchback-model";
					break;
				case 'FULL SIZE':
					$icon = "flaticon-sedan-car-model";
					break;
				case 'VAN':
					$icon = "flaticon-car-1";
					break;
			}

		  echo '<div class="b-filter-type-2__item">
                	<input type="checkbox" class="b-filter-type-2__input" id='.$item["idmodelos_categorias"].'>
                	<label class="b-filter-type-2__label" for="'.$item["idmodelos_categorias"].'"><i class="b-filter-type-2__icon '.$icon.'"></i><span class="b-filter-type-2__title">'.$item["modelo_categoria"].'</span>
                	</label>
                </div>';

        }

	}

	public function mostarModelosServiciosController(){

		$respuesta = ModelosModels::seleccionarModelosServiciosModel("modelos");

		foreach ($respuesta as $row => $item) {
			  echo '<div class="b-rent">
                        <img class="b-rent__img img-responsive" src="backend/'.$item["ruta"].'" alt="img">
                        <div class="b-rent__title">'.$item["modelo"].'</div>
                        <div class="b-rent__price">Starting from $'.$item["dia"].'/ Day</div>
                        <div class="ui-decor-2"></div>
                        <ul class="b-rent__list list-unstyled">
                            <li class="b-rent__list-item"><i class="icon flaticon-doors"></i>4 Doors</li>
                            <li class="b-rent__list-item"><i class="icon flaticon-transport-1"></i>'.$item["puestos"].' Passenger Seats</li>
                            <li class="b-rent__list-item"><i class="icon flaticon-ac"></i>Chilled AC / Heater</li>
                            <li class="b-rent__list-item"><i class="icon flaticon-suitcase-with-white-details"></i>'.$item["maletas"].' Suitcase</li>
                        </ul>
                    </div>';
		}
		
	}

	public function mostarModelosFooterController(){

		$respuesta = ModelosModels::seleccionarModelosFooterModel("modelos");

		foreach ($respuesta as $row => $item) {
			  echo '<div class="spost clearfix">
						<div class="entry-image">
							<a href="#"><img src="backend/'.$item["ruta"].'" alt="Package"></a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4><a href="modelos">'.$item["modelo"].' </a></h4>
							</div>
							<ul class="entry-meta">
								<li><strong>4,5</strong> stars</li>
							</ul>
						</div>
					</div>';
		}
		
	}





}

?>
