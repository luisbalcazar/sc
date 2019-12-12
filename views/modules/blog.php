<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<link rel="stylesheet" href="views/css/master.css" />
<!-- SWITCHER-->
<link href="views/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" />
<link href="views/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" />
<link href="views/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" />
<link href="views/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" />
<link href="views/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />

<div id="wrapper" class="clearfix">

	<?php include "cabezera.php"; ?>

	<section id="content">
	<div class="content-wrap">

		<?php

			$blogs = new Articulos();

			if (isset($_GET["model"])) {
				$blogs -> seleccionarArticulosBlog($_GET["model"]);
				
			} else{
				$blogs -> seleccionarArticulosBlogs();
			}
	
		?>
		
	</div>
	</section>

<?php include "footer.php"; ?>
</div>

