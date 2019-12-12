<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<meta name="description" content="Miami Rental cars">
  	<meta name="keywords" content="Alquilar,Miami,Licencia,Peajes,Precio,Conducir,Datos,Cuidado,Detencion,Normas,Seguridad,Automatico,Freno,Caja,Consejo,Semaforo,Autos,Corolla,Fiesta,Honda Fit,Hyundai">

	<link rel="shortcut icon" type="image/x-icon" href="views/demos/travel/images/Logos/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="views/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="views/css/style.css" type="text/css" />
	<link rel="stylesheet" href="views/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="views/css/magnific.css" type="text/css" />

	<link rel="stylesheet" href="views/demos/travel/travel.css" type="text/css" />
	<link rel="stylesheet" href="views/demos/travel/css/datepicker.css" type="text/css" />

	<link rel="stylesheet" href="views/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="views/css/fa/css/fontawesome-all.min.css" type="text/css" />
	<link rel="stylesheet" href="views/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="views/css/colors.css" type="text/css" />
	<link rel="stylesheet" href="views/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="views/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="views/css/colors.php?color=AC4147" type="text/css" />
	<script src="views/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</head>

<body class="stretched">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <?php
        $module = new Enlaces();
        $module -> enlacesController();
    ?>

	<div id="gotoTop" class="icon-angle-up"></div>

	<script data-cfasync="false" src="views/demos/travel/js/email-decode.min.js"></script>
	<script src="views/js/jquery.js"></script>
	<script src="views/js/plugins.js"></script>

	<script src="views/demos/travel/js/datepicker.js"></script>

	<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script> -->

	<!-- Bootstrap Switch Plugin -->
	<script src="views/js/components/bs-switches.js"></script>

	<script src="views/js/sumarTotal.js"></script>
	<script src="views/js/ajax.js"></script>
	
	<script src="views/js/functions.js"></script>
	<script src="views/js/instafeed.min.js"></script>
	<script src="views/js/custom.js"></script>
	<script src="views/js/magnific.min.js"></script>
	<!-- THEME'S SCRIPTS-->
		<!-- Select customization & Color scheme-->
        <script src="views/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
		<!-- Pop-up window-->
        <script src="views/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Mail scripts-->
        <script src="views/plugins/jqBootstrapValidation.js"></script>
        <!--<script src="views/plugins/contact_me.js"></script>-->
        <!-- Filter and sorting images-->
        <script src="views/plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="views/plugins/isotope/imagesLoaded.js"></script>
        <!-- Progress numbers-->
        <script src="views/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="views/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
        <!-- NoUiSlider-->
        <script src="views/plugins/noUiSlider/nouislider.min.js"></script>
        <script src="views/plugins/noUiSlider/wNumb.js"></script>
        <!-- Animations-->
        <script src="views/plugins/scrollreveal/scrollreveal.min.js"></script>
        <!-- Slider-->
        <script src="views/plugins/owl-carousel/owl.carousel.min.js"></script>
        <!-- Main slider-->
        <script src="views/plugins/slider-pro/jquery.sliderPro.min.js"></script>
        <!-- Datepicker-->
        <script src="views/plugins/datepicker/jquery.datetimepicker.js"></script>
	<script>

			$(function() {
				$('.travel-date-group').datepicker({
					autoclose: true,
					startDate: "today"
				});
			});

			function initMap(){

				jQuery(window).on( 'load', function(){

					jQuery('#popular-dest-map').gMap({
						address: 'Spain',
						maptype: 'ROADMAP',
						zoom: 2,
						markers: [
							{
								address: "Melbourne, Australia",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "Ibiza, Spain",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "New York",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "Rio de Janeiro, Brazil",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "Moscow, Russia",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "Rome, Italy",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "New Delhi, India",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "Bangkok, Thailand",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "Dubai",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							},
							{
								address: "Cape Town, South Africa",
								icon: {
									image: "images/icons/map-icon-red.png",
									iconsize: [32, 39],
									iconanchor: [16,36]
								}
							}
						],
						doubleclickzoom: false,
						controls: {
							panControl: false,
							zoomControl: true,
							mapTypeControl: false,
							scaleControl: false,
							streetViewControl: false,
							overviewMapControl: false
						},
						styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]
					});
				});

			}

			//var map = new google.maps.Map(document.getElementById('mapDiv'), markers);
			

	</script>
	<script  src="views/https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI&callback=initMap"></script>
	<script src="views/js/jquery.gmap.js"></script>

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5bbf67ce08387933e5baf304/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>

