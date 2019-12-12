<footer id="footer" class="dark" style="background-color: #222;">
		<div class="container">
			<div class="footer-widgets-wrap clearfix">
				<div class="col_one_third">
					<div class="widget clear-bottommargin-sm clearfix">
						<div class="row">
							<div class="col-lg-12 bottommargin-sm">
								<div class="footer-big-contacts">
									<span>Call Us:</span>
									(786) 365-4846
								</div>
							</div>
							<div class="col-lg-12 bottommargin-sm">
								<div class="footer-big-contacts">
									<span>Send an Enquiry:</span>
									<a href="info@sicarrental.com" class="__cf_email__" >info@sicarrental.com</a>
								</div>
							</div>
						</div>
					</div>
					<div class="widget subscribe-widget clearfix">
						<div class="row">
							<div class="col-lg-6 clearfix bottommargin-sm">
								<a href="https://www.facebook.com/sicarrental/" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
								</a>
								<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
							</div>
							<div class="col-lg-6 clearfix">
								<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
								<i class="icon-rss"></i>
								<i class="icon-rss"></i>
								</a>
								<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col_one_third">
					<div class="widget clearfix">
						<h4>Featured Models</h4>
						<div id="post-list-footer">
							<?php 
								$modelos = new ModelosController();
								$modelos->mostarModelosFooterController();
							 ?>
						</div>
					</div>
				</div>

				<div class="col_one_third col_last">
					<div class="widget widget_links clearfix">
						<h4>Popular Brands</h4>
						<div class="row clearfix">
							<div class="col-6">
								<ul>
									<li><a href="modelos">Chevrolet</a></li>
									<li><a href="modelos">Toyota</a></li>
									<li><a href="modelos">Nissan</a></li>
									<li><a href="modelos">Kia</a></li>
								</ul>
							</div>
							<div class="col-6">
								<ul>
									<li><a href="modelos">Hyunday</a></li>
									<li><a href="modelos">Ford</a></li>
									<li><a href="modelos">Honda</a></li>
									<li><a href="modelos">Wolksvagen</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>

			<div id="copyrights">
				<div class="container clearfix">
					<div class="col_half">
						powered by <a href="http://www.uncionweb.com">uncionweb</a><br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>
					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/sicarrental/" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-twitter" data-toggle="modal" data-target="#whatsappModal">
								<i class="fab fa-whatsapp"></i>
								<i class="fab fa-whatsapp"></i>
							</a>
							<a href="https://www.instagram.com/sicarrentall/?hl=es-la" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram2"></i>
								<i class="icon-instagram2"></i>
							</a>
						</div>
						<div class="clear"></div>
						<i class="icon-envelope2"></i> <a href="info@sicarrental.com" class="__cf_email__">info@sicarrental.com </a><i class="icon-headphones"></i> (786) 365-4846 <span class="middot">&middot;</span> <i class="icon-skype2"></i> Skype
					</div>
				</div>
			</div>
		</div>
	</footer>