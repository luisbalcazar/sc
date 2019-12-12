<?php 
	if (isset($_POST['start'])){
		if (session_status() == PHP_SESSION_NONE) {
                session_start();
                $_SESSION['fechainicio'] = $_POST['start'];
                $_SESSION['fechafin'] = $_POST['end'];
                $_SESSION['locPickup'] = $_POST['locPickup'];
                $_SESSION['locDropoff'] =$_POST['locDropoff'];
                $_SESSION['horaInicio'] =$_POST['startTime'];
                $_SESSION['horaFin'] =$_POST['endTime'];
                $_SESSION['horas'] = ($_SESSION['horaFin'] - $_SESSION['horaInicio'])/100;

            }
	}

include "cabezera.php";
 ?>

<div class="section nomargin nobg clearfix">
	<div class="container clearfix">
		<div class="heading-block center">
			<div class="before-heading ls1" style="font-size: 13px; font-style: normal;">
				<?php
					if (isset($_SESSION['fechainicio'])){
						$start = $_SESSION['fechainicio'] . " " .$_SESSION['horaInicio'];
						$end = $_SESSION['fechafin']. " " .$_SESSION['horaFin'];
						$nuevoTiempo = new Busqueda();
						$transcurrido = $nuevoTiempo -> tiempo($start,$end);
						$horas=  $transcurrido->h;
						$minutos=  $transcurrido->i;
						$meses = $transcurrido->m;
						$diasex = $transcurrido->d;
						$semanas = intval($diasex/7);
						$dias = $diasex - ($semanas * 7); 
						//var_dump($transcurrido);
						if ($minutos >=1){
							$horas++;
						}
						if ($horas >= 1){
							$diasex++;
						}
						echo "$meses month(s), $semanas week(s), $dias days and $horas hours $minutos" ;
					}
				?>	
			</div>
			<h3 >Choose Vehicles</h3>
		</div>
				
		<div class="clear"></div>

		<!-- Portfolio Items
		============================================= -->
		<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix" data-layout="fitRows">
			<?php

				$restulado = new Busqueda();
				@$restulado -> listarResultados($meses,$semanas,$dias,$horas);

			?>

		</div>
	</div>
</div>

<?php include "footer.php"; ?>