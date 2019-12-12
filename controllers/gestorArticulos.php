<?php

class Articulos{

	public function seleccionarArticulosCursosController(){

		$respuesta = ArticulosModels::mostrarCursos("articulos");

		foreach ($respuesta as $row => $item){

			echo '
					<div class="item">
							<div class="ed_item_img">
								<a href="'.$item["url"].'"><img src="backend/'.$item["ruta"].'" alt="item1" class="img-responsive"></a>
							</div>
							<div class="ed_item_description">
								<a href="'.$item["url"].'"><h4>'.$item["titulo"].'</h4></a>
								<p>'.$item["extracto"].'</p>
							</div>
						</div>';

		}


	}

	public function listarArticulosCursosController(){

		$respuesta = ArticulosModels::mostrarCursos("articulos");

		foreach ($respuesta as $row => $item){

			$arreglo2 = explode("/", $item["subtitulo"] );

			echo '
					<li><a href="'.$item["url"].'">'.$item["titulo"].'</a></li>';

		}


	}

	public function seleccionarArticulosCursosMController(){

		$respuesta = ArticulosModels::mostrarCursos("articulos");

		foreach ($respuesta as $row => $item){

			$arreglo2 = explode("/", $item["subtitulo"] );

			echo '

				<div class="item listing-item col-lg-3 col-md-4 col-sm-6 col-xs-10" data-listing-price="'.@$arreglo2[2].'" data-listing-titu="'.$item["titulo"].'" data-listing-fecha="'.fechas::torden($item["fecha"]).'">
					<div class="ed_item_img"><img src="backend/'.$item["ruta"].'" alt="item1" class="img-responsive" /></div>
					<div class="ed_item_description ed_most_recomended_data">
					<h4><a href="'.$item["url"].'">'.$item["titulo"].'</a><span>'.@$arreglo2[2].'&euro;</span></h4>
					<div class="course_detail">
					<div class="course_faculty"><a href="'.@$arreglo2[1].'">'.@$arreglo2[0].'</a></div>
					</div>
					<p>'.$item["extracto"].'</p>
					<a href="'.$item["url"].'" class="ed_getinvolved">leer m&aacute;s <i class="fa fa-long-arrow-right"></i></a></div>
					</div>';

		}


	}

	public function seleccionarArticulosPonentesMController(){

		$respuesta = ArticulosModels::mostrarPonentes("articulos");

		foreach ($respuesta as $row => $item){
			@	$i= $i+1;
			echo '
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="ed_team_member">
				<div class="ed_team_member_img"><img src="backend/'.$item["ruta"].'" alt="item1" class="img-responsive" /></div>
				<div class="ed_team_member_description">
				<h4><a href="'.$item["url"].'">'.$item["titulo"].'</a></h4>
				<h5>'.$item["subtitulo"].'</h5>
				<p>'.$item["extracto"].'</p>
				</div>
				</div>
				</div>';
			if ($i % 4 == 0) {
				echo '<div class="clearfix"></div>';
			}

		}


	}
	public function seleccionarArticulosControllerAC(){

		$respuesta = ArticulosModels::seleccionarArticulosModelAC("articulos");

		foreach ($respuesta as $row => $item){

			echo '<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<img src="backend/'.$item["ruta"].'" class="img-thumbnail">
					<h1>'.$item["titulo"].'</h1>
					<p>'.$item["introduccion"].'</p>
					<a href="#articulo'.$item["id"].'" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</li>

				<div id="articulo'.$item["id"].'" class="modal fade">
      
					<div class="modal-dialog modal-content">

						<div class="modal-header" style="border:1px solid #eee">
			            
			   				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  		 		<h3 class="modal-title">'.$item["titulo"].'</h3>
			            
						</div>

						<div class="modal-body" style="border:1px solid #eee">
			            
			    			<img src="backend/'.$item["ruta"].'" width="100%" style="margin-bottom:20px">
			    			<p class="parrafoContenido text-justify">'.$item["contenido"].'</p>
			            
						</div>

							<div class="modal-footer" style="border:1px solid #eee">
			            
			    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			            
							</div>

					</div>

				</div>';

		}


	}

	public function seleccionarArticulosBienvenido(){

		$respuesta = ArticulosModels::mostrarArticulo("welcome");

			echo '
					
				<div class="container center clearfix information">
					<div class="heading-block bottommargin-sm nobottomborder">
						<span class="before-heading color">'.$respuesta["titulo"].'</span>
						<h2>Long Term Rental</h2>
					</div>
					<p class="lead">'.$respuesta["extracto"].'</p>
					<a href="#" class="button button-rounded button-reveal tright button-xlarge topmargin-sm"><i class="icon-angle-right"></i><span>Start</span></a>
				</div>
			';


	}

	public function seleccionarContadoresController(){

		$respuesta = ArticulosModels::mostrarArticulo("contadores");

			echo $respuesta["contenido"];


	}
	public function seleccionarArticulosBlogs(){

		$respuesta = ArticulosModels::mostrarBlogs();
		$respuesta3 = ModelosModels::seleccionarMarcasModel("marcas");

		/*foreach ($respuesta as $row => $item){  
			echo '
				<div class="ipost col-md-6 bottommargin clearfix">
					<div class="row">
						<div class="col-lg-6">
							<div class="entry-image nobottommargin">
								<a href="#"><img src="backend/'.$item["ruta"].'" alt="Paris"></a>
							</div>
						</div>
						<div class="col-lg-6" style="margin-top: 20px;">
							<span class="before-heading">'.$item["titulo"].'</span>
							<div class="entry-title">
								<h3><a href="blog_'.$item["id"].'">'.$item["subtitulo"].'</a></h3>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> '.$item["fecha"].'</li>
								<li><a href="#"><i class="icon-comments"></i> 19</a></li>
							</ul>
							<div class="entry-content">
								<a href="blog_'.$item["id"].'" class="more-link">Read more</a>
							</div>
						</div>
					</div>
				</div>
			';
		}*/
		echo '
            <div class="section-title-page area-bg area-bg_dark area-bg_op_70" style="
    margin-top: 0;
">
                <div class="area-bg__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="b-title-page bg-primary_a">news blog</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <main class="l-main-content">
                            <div class="posts-group-2">';
	                            foreach ($respuesta as $row => $item){ 
	                            ?>
                                <section class="b-post b-post-full clearfix">
                                    <div class="entry-media">
                                        <a class="js-zoom-images" href="backend/<?php echo $item["ruta"]; ?>">
                                            <?php 
                                            echo '
                                            <img class="img-responsive" src="backend/'.$item["ruta"].'" alt="'.$respuesta["titulo"].'" />';
                                             ?>
                                        </a>
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-meta">
                                            <div class="entry-meta__group-left"><span class="entry-meta__item">On<a class="entry-meta__link" href="blog-main.html"> <?php echo $item["fecha"]; ?></a></span>
                                            </div>
                                            <div class="entry-meta__group-right"><span class="entry-meta__item"><i class="icon fa fa-heart"></i><a class="entry-meta__link" href="blog-main.html"> 205</a></span><span class="entry-meta__item"><i class="icon fa fa-comment-o"></i>Comments<a class="entry-meta__link" href="blog-main.html"> 518</a></span>
                                            </div>
                                        </div>
                                        <div class="entry-header">
                                            <h2 class="entry-title"><a href="blog_<?php echo $item["id"] ?>"><?php echo $item["titulo"]; ?></a></h2>
                                        </div>
                                        <div class="entry-content">
                                            <p><?php echo $item["extracto"]; ?></p>
                                        </div>
                                        <div class="entry-footer"><a class="btn btn-default" href="blog_<?php echo $item["id"] ?>">read more</a>
                                        </div>
                                    </div>
                                </section>
                           
                                <!-- end .post-->
                                <!--<div class="b-bnr-3">
                                    <div class="b-bnr-3__title">We offers the lowest car prices</div>
                                    <div class="b-bnr-3__info"><span class="b-bnr-3__info-item">Post by Thomas Neil</span><span class="b-bnr-3__info-item">On August 22, 2017</span><a class="btn btn-primary" href="blog-post.html">Ford News</a>
                                    </div>
                                </div>-->
                            <?php }
                            echo '</div>
                            '; /*<ul class="pagination">
                                <li><a href="#"><i class="icon fa fa-angle-double-left"></i></a>
                                </li>
                                <li><a href="#">1</a>
                                </li>
                                <li class="active"><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#"><i class="icon fa fa-angle-double-right"></i></a>
                                </li>
                            </ul>*/echo '
                        </main>
                        <!-- end .l-main-content-->
                    </div>
                    <div class="col-md-4">
                        <aside class="l-sidebar-3">
                            <section class="widget section-sidebar">
                                <h3 class="widget-title ui-title-inner">brands</h3>
                                <div class="widget-content">
                                    <ul class="widget-list list list-mark-5">';
                                    foreach ($respuesta3 as $row => $item){ ?>
                            			<li class="widget-list__item"><a class="widget-list__link" href="modelos"><?php echo $item["marca"]; ?></a>
                                        </li>
									<?php
									}
                                    echo '</ul>
                                </div>
                            </section>
                            <!-- end .widget-->
                            <section class="widget widget-gallery section-sidebar clearfix">
                                <h3 class="widget-title ui-title-inner">instagram feed</h3>
                                <div class="widget-content">
                                    <div id="instafeed" class="js-zoom-gallery">
                                        
                                    </div>
                                </div>
                            </section>
                            <!-- end .widget-->
                            <section class="widget section-sidebar">
                            	<h3 class="widget-title ui-title-inner">TAGs</h3>
                                <div class="widget-content">
                                	<ul class="list-tags list-unstyled">
	                                ';	foreach ($respuesta as $row => $item){ 
		                                	$etiqueta = explode(",", $item["etiquetas"]);
		                                	for($i = 0; count($etiqueta) > $i; $i++){ ?>
		                                		<li class="list-tags__item"><a class="list-tags__link" href="blog_<?php echo $item["id"] ?>"><?php echo $etiqueta[$i]; ?></a>
	                              <?php 	}
	                            		}
	                                    echo  '
	                                </ul>
                                </div>
                            </section>
                        </aside>
                        <!-- end .sidebar-->
                    </div>
                </div>
            </div>';
                             		
	}

	public function seleccionarArticulosBlogs2(){

		$respuesta = ArticulosModels::mostrarBlogs();

		foreach ($respuesta as $row => $item){  
			echo '
				<div class="ipost col-md-6 bottommargin clearfix">
					<div class="row">
						<div class="col-lg-6">
							<div class="entry-image nobottommargin">
								<a href="#"><img class="blogs2_images" style="width: 400px; height: 200px;" src="backend/'.$item["ruta"].'" alt="Paris"></a>
							</div>
						</div>
						<div class="col-lg-6" style="margin-top: 20px;">
							<span class="before-heading">Blog</span>
							<div class="entry-title">
								<h3><a href="blog_'.$item["id"].'">'.$item["titulo"].'</a></h3>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> '.$item["fecha"].'</li>
								<li><a href="#"><i class="icon-comments"></i> 19</a></li>
							</ul>
							<div class="entry-content">
								<a href="blog_'.$item["id"].'" class="more-link">Read more</a>
							</div>
						</div>
					</div>
				</div>
			';
		}
	}

	public function seleccionarArticulosBlog($id){

		$respuesta = ArticulosModels::mostrarBlog($id);
		$respuesta2 = ArticulosModels::mostrarBlogs();
		$respuesta3 = ModelosModels::seleccionarMarcasModel("marcas");

		if ($respuesta) {
			/*echo '
				<div class="ipost col-md-6 bottommargin clearfix">
					<div class="row">
						<div class="col-lg-6">
							<div class="entry-image nobottommargin">
								<a href="#"><img src="backend/'.$respuesta["ruta"].'" alt="Paris"></a>
							</div>
						</div>
						<div class="col-lg-6" style="margin-top: 20px;">
							<span class="before-heading">'.$respuesta["titulo"].'</span>
							<div class="entry-title">
								<h3>'.$respuesta["subtitulo"].'</h3>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> '.$respuesta["fecha"].'</li>
								<li><a href="#"><i class="icon-comments"></i> 19</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div style="margin-left: 15px;">'.$respuesta["contenido"].'</div>
			';*/

			echo '
				<div class="section-title-page area-bg area-bg_dark area-bg_op_70" style="margin-top: 0;">
	                <div class="area-bg__inner">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-xs-12">
	                                <h1 class="b-title-page bg-primary_a">news blog</h1>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
				<div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <main class="l-main-content">
                            <article class="b-post b-post-full clearfix">
                                <div class="entry-media">
                                    <a class="js-zoom-images" href="assets/media/content/posts/750x380/1.jpg">
                                        <img class="img-responsive" src="backend/'.$respuesta["ruta"].'" alt="'.$respuesta["titulo"].'" />
                                    </a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-meta">
                                       
                                        <div class="entry-meta__group-right"><span class="entry-meta__item">On <a class="entry-meta__link" href="#">'.$respuesta["fecha"].'</a></span>
                                        </div>

                                        <div class="fb-like" data-href="http://www.sicarrental.net/blog" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

                                    </div>
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="#">'.$respuesta["titulo"].'</a></h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>'.$respuesta["extracto"].'</p>
                                        <hr>
                                        <!-- end .b-blockquote-->
                                        <div>'.$respuesta["contenido"].'</div>
                                    </div>
                                </div>
                                <div class="entry-footer">
                                <i class="icon fa fa-tags text-primary"></i><span class="entry-footer__title">tags:</span>
                                ';
                                	$etiqueta = explode(",", $respuesta["etiquetas"]);
                                	for($i = 0; count($etiqueta) > $i; $i++){ ?>
                                  		<div class="entry-footer__group" style="display: inline-block;"><a class="entry-footer__tags" href="blog_<?php echo $respuesta["id"] ?>"><?php echo $etiqueta[$i]; ?></a>
                                    	</div>
                                <?php }
                                    echo  '
                                </div>
                            </article>
                            <div class="post-carousel owl-carousel owl-theme enable-owl-carousel" data-min768="2" data-min992="2" data-min1200="2" data-margin="30" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true">';
                            		foreach ($respuesta2 as $row => $item){ ?>
                            			<div class="b-post-nav__item"><span class="b-post-nav__img"><img class="img-responsive" style="width: 400px; height: 200px" src="backend/<?php echo $item["ruta"]; ?>" alt="foto"/></span><span class="b-post-nav__inner"><span class="b-post-nav__title"><?php echo $item["titulo"]; ?></span>
                                    		<a class="b-post-nav__btn btn btn-primary btn-sm" href="blog_<?php echo $item["id"]; ?>">Read</a>
                                        </span>
                                		</div>
									<?php
									} echo '
                                
                            </div>
                            <section class="section-comment">
                                <div class="fb-comments" data-href="http://sicarrental.net" data-numposts="5"></div>
                                
                            </section>
                            <!-- end .section-comment-->
                        </main>
                        <!-- end .l-main-content-->
                    </div>
                    <div class="col-md-4">
                        <aside class="l-sidebar-3">
                            <section class="widget section-sidebar">
                                <h3 class="widget-title ui-title-inner">brands</h3>
                                <div class="widget-content">
                                    <ul class="widget-list list list-mark-5">';
                                    foreach ($respuesta3 as $row => $item){ ?>
                            			<li class="widget-list__item"><a class="widget-list__link" href="modelos"><?php echo $item["marca"]; ?></a>
                                        </li>
									<?php
									}
                                    echo '</ul>
                                </div>
                            </section>
                            <!-- end .widget-->
                            <section class="widget section-sidebar">
								    <h3 class="widget-title ui-title-inner">Recent posts</h3>
								    <div class="widget-content">';
                            		foreach ($respuesta2 as $row => $item){ ?>
								
								        <div class="post-widget clearfix">
								            <div class="post-widget__media">
								                <a href="blog-post.html">
								                    <img class="img-responsive" src="backend/<?php echo $item["ruta"]; ?>" alt="foto" />
								                </a>
								            </div>
								            <div class="post-widget__inner"><a class="post-widget__title" href="blog_<?php echo $item["id"]; ?>"><?php echo $item["titulo"]; ?></a>
								                <div class="post-widget__date">On
								                    <time class="post-widget__time" datetime="2017-10-27 15:20"><?php echo $item["fecha"]; ?></time>
								                </div>
								            </div>
								            <!-- end .widget-post-->
								        </div><?php
									} echo '
                            		</div>
							</section>
                            <!-- end .widget-->
                            <section class="widget widget-gallery section-sidebar clearfix">
                                <h3 class="widget-title ui-title-inner">instagram feed</h3>
                                <div class="widget-content">
                                    <div id="instafeed" class="js-zoom-gallery">
                                        
                                    </div>
                                </div>
                            </section>
                            <!-- end .widget-->
                        </aside>
                        <!-- end .sidebar-->
                    </div>
                </div>
            </div>
			';
		}else{

			echo '
				<div style="text-align: center; margin:15px;">
					
					<h4>Oops, ha ocurrido un error. Blog no encontrado</h4>
		
				</div>
			';

		}

	}

	public function enlacesArticulosController($enlaces){

		$enlace = strtolower($enlaces);
		$respuesta = ArticulosModels::seleccionarEnlacesArticulosModel("articulos" , $enlace);

		//reemplazar :: por directorio de enlaces

		$bodytag = str_replace("::", "views/resources/", $respuesta["contenido"]);
		$respuesta["contenido"] = $bodytag;

		//reemplazar boton por imagen de descarga

		$bodytag = str_replace("BTN", '<img src="views/images/btn.png" height="75" />', $respuesta["contenido"]);
		$respuesta["contenido"] = $bodytag;
		var_dump($enlaces);
		
		if ($respuesta["tipoarticulo"] == "2") { 

			include "views/articulo.php";
			
		} else { 

			include "views/general.php";

		}



	}

	public function mostrarCursosController($id){
		$respuesta = ArticulosModels::mostrarCursos("articulos");		
		foreach($respuesta as $row => $item) {
				echo '
				<option value="'.$item["id"].'">'.$item["titulo"].'</option>';

		}

	}

}
