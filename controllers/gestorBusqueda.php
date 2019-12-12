<?php

class Busqueda{

	public function listarCargos($meses,$semanas,$dias,$horas,$id){

		$respuesta = BusquedaModels::listarCargos($id);


		foreach ($respuesta as $row => $item){
			$total = ($meses * $item["mes"]) + ($semanas * $item["semana"]) + ($dias * $item["dia"]) + ($horas * $item["hora"]);
			$automatico = ($item["automatico"] == 1) ? "Automatic" : "Manual";
			$aire = ($item["aire"] == 1) ? "Yes" : "No";
			if ($total > 0){
			echo '
				<article class="portfolio-item cf-'.$item["idmodelos_categorias"].'" style="padding-bottom: 40px">
				<div class="portfolio-item-div">
								<div class="portfolio-image">
									<a href="#">
										<img src="backend/'.$item["ruta"].'" alt="Rent '.$item["marca"].' '.$item["modelo"].'">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">P/Day: $'.$item["dia"].'</span>
											<span class="p-price-msrp">Total : <strong>$'.$total.'</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">'.$item["marca"].' '.$item["modelo"].'</a></h3>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="fas fa-suitcase"></i><span> '.$item["maleta"].'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="fas fa-users"></i></i><span> '.$item["puestos"].' Seater</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> '.$item["tanque"].'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> '.$automatico.'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="far fa-snowflake"></i><span> '.$aire.'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
								</div>
							</div>
							</article>'; } else {

								echo '
				<article class="portfolio-item cf-sedan" style="padding-bottom: 40px">
								<div class="portfolio-image">
									<a href="#">
										<img src="backend/'.$item["ruta"].'" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">P/Day: $'.$item["dia"].'</span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">'.$item["marca"].' '.$item["modelo"].'</a></h3>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="fas fa-suitcase"></i><span> '.$item["maleta"].'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="fas fa-users"></i></i><span> '.$item["puestos"].' Seater</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> '.$item["tanque"].'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> '.$automatico.'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="far fa-snowflake"></i><span> '.$aire.'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
								</div>
							</article>';

							}

		}


	}


	public function listarResultados($meses,$semanas,$dias,$horas){


		$respuesta = BusquedaModels::listarResultados();


		foreach ($respuesta as $row => $item){
			$total = ($meses * $item["mes"]) + ($semanas * $item["semana"]) + ($dias * $item["dia"]) + ($horas * $item["hora"]);
			$automatico = ($item["automatico"] == 1) ? "Automatic" : "Manual";
			$aire = ($item["aire"] == 1) ? "Yes" : "No";
			if ($total > 0){
			echo '
				<article class="portfolio-item cf-'.$item["idmodelos_categorias"].'" style="padding-bottom: 40px; left:9px !important;">
				<div class="portfolio-item-div">
								<div class="portfolio-image">
									<a href="reserve_'.$item["idmodelo"].'">
										<img src="backend/'.$item["ruta"].'" alt="Rent '.$item["marca"].' '.$item["modelo"].'">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">P/Day: $'.$item["dia"].'</span>
											<span class="p-price-msrp">Total : <strong>$'.$total.'</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">'.$item["marca"].' '.$item["modelo"].'</a></h3>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="fas fa-suitcase"></i><span> '.$item["maleta"].'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="fas fa-users"></i></i><span> '.$item["puestos"].' Seater</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> '.$item["tanque"].'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal2"></i><span> '.$automatico.'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="far fa-snowflake"></i><span> '.$aire.'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
								</div>
							</div>
							</article>'; } else {

								echo '
				<article class="portfolio-item cf-sedan" style="padding-bottom: 40px left:9px !important;">
								<div class="portfolio-image">
									<a href="index.php">
										<img src="backend/'.$item["ruta"].'" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">P/Day: $'.$item["dia"].'</span>
											
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">'.$item["marca"].' '.$item["modelo"].'</a></h3>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="fas fa-suitcase"></i><span> '.$item["maleta"].'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="fas fa-users"></i></i><span> '.$item["puestos"].' Seater</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-pump"></i><span> '.$item["tanque"].'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> '.$automatico.'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="far fa-snowflake"></i><span> '.$aire.'</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
								</div>
							</article>';

							}

		}


	}

	public function tiempo($fechaInicio,$fechaFin){
    	$fecha1 = new DateTime($fechaInicio);
    	$fecha2 = new DateTime($fechaFin);
    	$fecha = $fecha1->diff($fecha2);   
   
    	return $fecha;
	}



	public function calculo($meses,$semanas,$dias,$horas,$id){

		$item = BusquedaModels::calculo($id);

		$total = ($meses * $item["mes"]) + ($semanas * $item["semana"]) + ($dias * $item["dia"]) + ($horas * $item["hora"]);
		$total = number_format($total, 2, '.', '');
		$item['total'] = $total;

		return $item ;


}

	public function cargos($dias, $id){

		$item = BusquedaModels::listarCargos($id);
		$item['vlocalcharge']= $item['localcharge'] * $dias ; 
		$item['vllantas_impuesto']= $item['llantas_impuesto'] * $dias ;
		$item['vsurcharge']= $item['surcharge'] * $dias ;  
		$item['vlicensefee']= $item['licensefee'] * $dias ; 
		$item['acum']= $item['vlocalcharge'] + $item['vllantas_impuesto'] + $item['vsurcharge']+$item['vlicensefee']; 

		return $item ;


}

public function config($dias){
	
		$item = BusquedaModels::config($id);
		
		return $item ;


}

}