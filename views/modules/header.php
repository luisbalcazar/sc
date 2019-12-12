<?php 
    switch ($_GET["action"]) {
        case 'index':
            $link = "Home";
            break;
        case 'modelos':
            $link = "Models";
            break;
        case 'servicios':
            $link = "Rental Services";
            break;
        case 'blog':
            $link = "Blog";
            break;

    }
 ?>
<title>Sicarental.com | <?php echo $link; ?></title>
<!-- Modal de Whatsapp -->
	<div class="modal fade" id="whatsappModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Message:</label>
	            <textarea class="form-control" id="message-text" name="message-text"></textarea>
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" onclick="sendMessage()" class="btn btn-danger">Send message</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div id="wrapper" class="clearfix">
		<div id="top-bar" class="transparent-topbar dark">
			<div class="container clearfix">
				<div class="col_half nobottommargin clearfix">
					<div class="top-links">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>

				<div class="col_half fright col_last clearfix nobottommargin">
					<div id="top-social">
						<ul>
							<li>
								<a href="https://www.facebook.com/sicarrental/" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
							</li>
							<li>
								<a href="#" class="si-twitter" data-toggle="modal" data-target="#whatsappModal"><span class="ts-icon"><i class="fab fa-whatsapp"></i></span><span class="ts-text">Whatsapp</span></a>
							</li>
							<li>
								<a href="https://www.instagram.com/sicarrentall/?hl=es-la" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a>
							</li>
							<li>
								<a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">(786) 365-4846</span></a>
							</li>
							<li>
								<a href="/cdn-cgi/l/email-protection#b4dddad2dbf4d7d5dac2d5c79ad7dbd9" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text"><span class="__cf_email__" data-cfemail="422b2c242d0221232c3423316c212d2f">[email&#160;protected]</span></span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<header id="header" class="transparent-header" data-sticky-class="not-dark" data-responsive-class="not-dark">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div class="wow swing" id="logo" data-wow-duration="1s">
						<a href="index.php" class="standard-logo" data-dark-logo="views/demos/travel/images/Logos/SicarlRental.png" ><img src="views/demos/travel/images/Logos/SicarlRental.png" alt="Sicar Rental" ></a>
						<a href="index.php" class="retina-logo" data-dark-logo="views/demos/travel/images/Logos/SicarlRental.png"><img src="views/demos/travel/images/Logos/SicarlRental.png" alt="Sicar Rental" style=""></a>
					</div>

					<nav id="primary-menu" class="style-4">
						<ul>
							<li class="current"><a href="index"><div><i class="icon-home2 round1"></i>Home</div></a> </li>
							<li><a href="modelos"><div><i class="fas fa-car round1" style="vertical-align: middle;"></i>Models</div></a></li>
							<li><a href="servicios"><div><i class="icon-building round1"></i>Rental Services</div></a></li>	<li><a href="blog"><div><i class="icon-pencil2 round1"></i>Blog</div></a></li>
							<li><a href="tel:+91.11.85412542"><div><i class="icon-phone3 round1"></i>(786) 365-4846</div></a></li>
						</ul>
					</nav>
				</div>
			</div>	
		</header>