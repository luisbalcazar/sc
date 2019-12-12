<?php

class Slide{

	public function seleccionarSlideController(){

		$respuesta = SlideModels::seleccionarSlideModel("slide");

		foreach ($respuesta as $row => $item){

			echo ' 
				<li data-transition="slotslide-horizontal">
							
							<!-- MAIN IMAGE -->
							<img src="backend/'.substr($item["ruta"], 6).'"  alt="">
							<div class="ed_course_single_image_overlay"></div>

							<!-- LAYER NR. 1 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 

									 data-x=["left","left","left","left"] data-hoffset=["45","60","60","40"] 
									data-y=["top","top","top","top"] data-voffset=["155","175","155","115"]  
									
									
									
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="x:-50px;skX:100px;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-start="1510" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 5; white-space: nowrap; font-size: 50px; color:#fff;     font-family: Roboto Slab, serif;">'.$item["titulo"].'
								</div>

								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
						
									data-x=["left","left","left","left"] data-hoffset=["45","60","60","40"] 
									data-y=["top","top","top","top"] data-voffset=["250","215","180","170"] 
									
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-start="1810" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 5; white-space: nowrap; font-size: 50px; color:#fff;     font-family: Roboto Slab, serif;">'.$item["descripcion"].'
								</div>

								
						</li>';
				
			
		}

	}
}