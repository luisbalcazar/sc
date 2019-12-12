<?php include "header.php"; ?>

		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix slider_responsive">
			<div class="slider-parallax-inner">
				<div class="fslider fslider_responsive" data-speed="3000" data-pause="7500" data-animation="fade" data-arrows="false" data-pagi="false">
					<div class="flexslider flexslider_responsive">
						<div class="slider-wrap" style="height: inherit;">
							<div class="slide" style="background: url('views/demos/travel/images/slider/1.jpg') center center; background-size: cover; height: 100% !important; width: auto;"></div>
							<div class="slide" style="background: url('views/demos/travel/images/slider/2.jpg') center center; background-size: cover; height: 100% !important; width: auto;"></div>
							<div class="slide" style="background: url('views/demos/travel/images/slider/3.jpg') center center; background-size: cover; height: 100% !important; width: auto;"></div>
						</div>
					</div>
				</div>
				<div id="travel-slider-overlay">
					<div class="vertical-middle">
						<div class="container clearfix mt-2">
							<div class="tabs travel-organiser-tabs clearfix wow rubberBand">
								
								<ul class="tab-nav clearfix">
									<li><a href="#tab-flights"><i class="far fa-clock"></i><span class="d-none d-md-inline-block">Daily Rental</span></a></li>
								</ul>

								<div class="tab-container btn-liquid">

									<div class="tab-content clearfix inner" id="tab-flights">
										<div class="heading-block nobottomborder bottommargin-sm clearfix">
											<h4 class="fleft">Reserve Form</h4>
										</div>
										<form action="search" method="post" class="nobottommargin">
											<div class="row">
												<div class="col-md-6 col-12 bottommargin-sm">
													<label for="">Pick up Location</label>
													<select name="locPickup" class="sm-form-control">
														<?php 
															$locacions = new locacionController();
															$locacions -> mostrarLocacionController();
														?>
													</select>
												</div>
												<div class="col-md-6 col-12 bottommargin-sm">
													<label for="">Drop off</label>
													<select name="locDropoff" class="sm-form-control" >
														<?php 
															$locacions = new locacionController();
															$locacions -> mostrarLocacionController();
														?>
													</select>
												</div>
													<div class="input-daterange travel-date-group col-md-10 bottommargin-sm"> 
														<div class="row">
															<div class="col-md-6 col-6">
																<label for="">PICK-UP</label>
																<input type="text" value="" class="sm-form-control tleft" name="start" placeholder="MM/DD/YYYY">
																<select name="startTime" class="sm-form-control tleft">
																		<option value="00:00">Midnight</option>
																		<option value="00:30">12:30am</option>
																		<option value="01:00">1:00am</option>
																		<option value="01:30">1:30am</option>
																		<option value="02:00">2:00am</option>
																		<option value="02:30">2:30am</option>
																		<option value="03:00">3:00am</option>
																		<option value="03:30">3:30am</option>
																		<option value="04:00">4:00am</option>
																		<option value="04:30">4:30am</option>
																		<option value="05:00">5:00am</option>
																		<option value="05:30">5:30am</option>
																		<option value="06:00">6:00am</option>
																		<option value="06:30">6:30am</option>
																		<option value="07:00">7:00am</option>
																		<option value="07:30">7:30am</option>
																		<option value="08:00">8:00am</option>
																		<option value="08:30">8:30am</option>
																		<option value="09:00">9:00am</option>
																		<option value="09:30">9:30am</option>
																		<option value="10:00">10:00am</option>
																		<option value="10:30">10:30am</option>
																		<option value="11:00">11:00am</option>
																		<option value="11:30">11:30am</option>
																		<option selected="selected" value="12:00">Noon</option>
																		<option value="12:30">12:30pm</option>
																		<option value="13:00">1:00pm</option>
																		<option value="13:30">1:30pm</option>
																		<option value="14:00">2:00pm</option>
																		<option value="14:30">2:30pm</option>
																		<option value="15:00">3:00pm</option>
																		<option value="15:30">3:30pm</option>
																		<option value="16:00">4:00pm</option>
																		<option value="16:30">4:30pm</option>
																		<option value="17:00">5:00pm</option>
																		<option value="17:30">5:30pm</option>
																		<option value="18:00">6:00pm</option>
																		<option value="18:30">6:30pm</option>
																		<option value="19:00">7:00pm</option>
																		<option value="19:30">7:30pm</option>
																		<option value="20:00">8:00pm</option>
																		<option value="20:30">8:30pm</option>
																		<option value="21:30">9:00pm</option>
																		<option value="21:30">9:30pm</option>
																		<option value="22:00">10:00pm</option>
																		<option value="22:30">10:30pm</option>
																		<option value="23:00">11:00pm</option>
																		<option value="23:30">11:30pm</option>
																</select>
															</div>
															<div class="col-md-6 col-6">
																<label for="">DROP-OFF</label>
																<input type="text" value="" class="sm-form-control tleft" name="end" placeholder="MM/DD/YYYY">
																<select name="endTime" class="sm-form-control tleft">
																		<option value="00:00">Midnight</option>
																		<option value="00:30">12:30am</option>
																		<option value="01:00">1:00am</option>
																		<option value="01:30">1:30am</option>
																		<option value="02:00">2:00am</option>
																		<option value="02:30">2:30am</option>
																		<option value="03:00">3:00am</option>
																		<option value="03:30">3:30am</option>
																		<option value="04:00">4:00am</option>
																		<option value="04:30">4:30am</option>
																		<option value="05:00">5:00am</option>
																		<option value="05:30">5:30am</option>
																		<option value="06:00">6:00am</option>
																		<option value="06:30">6:30am</option>
																		<option value="07:00">7:00am</option>
																		<option value="07:30">7:30am</option>
																		<option value="08:00">8:00am</option>
																		<option value="08:30">8:30am</option>
																		<option value="09:00">9:00am</option>
																		<option value="09:30">9:30am</option>
																		<option value="10:00">10:00am</option>
																		<option value="10:30">10:30am</option>
																		<option value="11:00">11:00am</option>
																		<option value="11:30">11:30am</option>
																		<option selected="selected" value="12:00">Noon</option>
																		<option value="12:30">12:30pm</option>
																		<option value="13:00">1:00pm</option>
																		<option value="13:30">1:30pm</option>
																		<option value="14:00">2:00pm</option>
																		<option value="14:30">2:30pm</option>
																		<option value="15:00">3:00pm</option>
																		<option value="15:30">3:30pm</option>
																		<option value="16:00">4:00pm</option>
																		<option value="16:30">4:30pm</option>
																		<option value="17:00">5:00pm</option>
																		<option value="17:30">5:30pm</option>
																		<option value="18:00">6:00pm</option>
																		<option value="18:30">6:30pm</option>
																		<option value="19:00">7:00pm</option>
																		<option value="19:30">7:30pm</option>
																		<option value="20:00">8:00pm</option>
																		<option value="20:30">8:30pm</option>
																		<option value="21:30">9:00pm</option>
																		<option value="21:30">9:30pm</option>
																		<option value="22:00">10:00pm</option>
																		<option value="22:30">10:30pm</option>
																		<option value="23:00">11:00pm</option>
																		<option value="23:30">11:30pm</option>
																</select>
															</div>

														</div>
													</div>

												<div class="col-md-12">
													<button class="button button-3d nomargin rightmargin-sm">Search </button>
												</div>
											</div>
										</form>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="content" style="left: 0px">
			<div class="content-wrap">
				<div class="wow fadeInDown section bottommargin-lg header-stick" data-wow-delay="3s" style="left: 0px !important;" id="i_contador">
					<?php include ('contadores.php'); ?>
				</div>
				<br>
				<div class="container clearfix">
					<div class="heading-block center nobottomborder">
						<span class="before-heading color">Do you want to know more about us?</span>
						<h2>Follow us on Instagram</h2>
					</div>
				</div>

				<div id="instafeed" class="wow lightSpeedIn portfolio grid-container portfolio-nomargin portfolio-full portfolio-overlay-open clearfix" data-wow-delay="1s">
					
					<?php //include ('modules/galeria.php'); ?>
				</div>
			
				<a href="https://www.instagram.com/sicarrental/" class="button button-full button-dark center bottommargin-lg">
					<div class="container clearfix">
						Can't find your Favorite Model? <strong>Go to our Instagram</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

				<div class="container clear-bottommargin clearfix">
					<div class="heading-block center">
						<h2>Latest from our Blog</h2>
					</div>
					<div style="background-image: url(views\demos\car\images\fancy-toyota);">
						<div id="blog" class="row clearfix wow rotateInDownRight" data-wow-delay="1s">
						
								<?php include ('blogs.php');?>

						</div>
					</div>
				</div>

				<div class="section topmargin-lg footer-stick wow slideInUp" id="text_content" data-wow-delay="1s">
					<?php include ('welcome.php');?>
				</div>
				<br>
			</div>
		</section>

		<div class="row clearfix">
			<div id="popular-dest-map" class="col-lg-8 d-none d-md-block wow zoomIn" style="padding: 0; padding-left: 16px !important; height: 562px !important; ">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d449388.5259159475!2d-81.56847806098055!3d28.4406589071704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1535121231034" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-lg-4 col-padding" style="background-color: #F9F9F9;">
				<div class="max-height clearfix">
					<div class="heading-block nobottommargin">
						<h4>CONTACT US</h4>
					</div>
					<div class="spost col-lg-12 col-md-6 noborder noleftpadding clearfix">
						<div class="col-md-10 col-10">
							<label for="">Name</label>
							<input type="text" value="" class="sm-form-control" name="name" placeholder="your name">
						</div>
					<div class="col-md-10 col-10">
						<label for="">email</label>
						<input type="text" value="" class="sm-form-control" name="email" placeholder="your email">
					</div>
					<div class="col-md-10 col-10">
						<label for="">message</label>
						<textarea class="sm-form-control" rows=5 >your message</textarea>
					</div>
				</div>
				<div class="clearfix">	</div>
				<div class="col-md-12">
					<button class="button button-3d nomargin rightmargin-sm" style="position: relative;top: 7px !important;">SEND </button>
				</div>
			</div>
		</div>
	</div>

	<?php include "footer.php"; ?>

	