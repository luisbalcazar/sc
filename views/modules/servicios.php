<meta content="" name="description" />
<meta content="" name="keywords" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<link rel="stylesheet" href="views/css/master.css" />

<div id="wrapper" class="clearfix">

        <?php include "cabezera.php"; ?>

            <div class="main-slider main-slider-4" style="margin-top: 0px">
                <div class="slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="650px" data-slider-arrows="false" data-slider-buttons="false">
                    <div class="sp-slides">
                        <!-- Slide 1-->
                        <div class="sp-slide">
                            <img class="sp-image" src="views/media/components/b-main-slider/6.jpg" alt="slider" />
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="sp-layer" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                                            <div class="main-slider__label">Do you need a ride?</div>
                                            <div class="main-slider__title">We offer Faster & Reliable
                                                <br>Car Rental Service</div><a class="main-slider__btn btn btn-lg btn-white" href="#">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2-->
                        <div class="sp-slide">
                            <img class="sp-image" src="views/media/components/b-main-slider/7.jpg" alt="slider" />
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="sp-layer" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                                            <div class="main-slider__label">Do you need a ride?</div>
                                            <div class="main-slider__title">We offer Faster & Reliable
                                                <br>Car Rental Service</div><a class="main-slider__btn btn btn-lg btn-white" href="#">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .main-slider-->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="search" method="post" class="b-booking-form area-bg area-bg_prim">
                            <div class="area-bg__inner">
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="selectpicker" name="locPickup" data-width="100%">
                                            <option>Pickup Location</option>
                                            <?php 
                                                $locacions = new locacionController();
                                                $locacions -> mostrarLocacionController();
                                             ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="selectpicker" name="locDropoff" data-width="100%">
                                            <option>Drop Off Location</option>
                                            <?php 
                                                $locacions = new locacionController();
                                                $locacions -> mostrarLocacionController();
                                             ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" id="datepicker" placeholder="Pickup Date &amp; Time" required="required" name="start" />
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
                                    <div class="col-md-3">
                                        <input name="end" class="form-control" type="text" id="offdatepicker" placeholder="Drop Off Date &amp; Time" required="required" />
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
                                                <option selected="selected" value="12:0">Noon</option>
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
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-3">
                                        <button class="btn btn-dark">book my ride</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end .b-booking-form-->
            <section class="section-type-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-type-2__img">
                                <img class="img-responsive" src="views/media/content/other/1.jpg" alt="foto">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="section-type-2__inner">
                                <h2 class="section-type-2__title">We are Trusted Name in car Renting Services</h2>
                                <div class="section-type-2__subtitle">Used by Million of People Every Month!</div>
                                <p>MotorLand is aliquip exd ea consequat duis lorem ipsum dolor sit amet consectetur dipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation. Slamco
                                    laboris nisi ut aliquip ex ea comdo cons equat uis aute irure dolor easprehen derit.</p>
                                <ul class="list list-mark-5 list_mark-prim list-2-col">
                                    <li>Airport Transfers</li>
                                    <li>Chauffeur Drive Services</li>
                                    <li>Car Leasing Facility</li>
                                    <li>Special Event Trips</li>
                                    <li>National Tours</li>
                                    <li>No Booking Fee</li>
                                    <li>Frequent Inspections</li>
                                    <li>Well Maintained Vehicles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .section-type-2-->
            <section class="section-rent area-bg parallax" style="background-image: url(views/media/content/bg/bg-10.jpg)">
                <div class="area-bg__inner">
                    <div class="section-rent__inner">
                        <h2 class="ui-title-block">Cars For Rent</h2>
                        <div class="ui-decor"></div>
                        <div class="ui-subtitle-block">MotorLand is nisi aliquip exa con velit esdy</div>
                        <p>Dolore fugiatal sint occaecat excepteur ipsum dolor sit amet consect etur eincididunt ue labore et dolore magna aliqua. Uet enim ad minm veniam quis nostrud exercitation ullamco laboris nisi ut aliquip venia quis nostrud exercitation
                            ullamco laboris nisi ut aliquip duis aute irue dolor in reprehenderit in voluptate velit esse .</p>
                    </div>
                    <div class="rent-carousel">
                        <div class="owl-carousel owl-theme enable-owl-carousel" data-min768="2" data-min992="2" data-min1200="3" data-margin="30" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true">
                            <?php 
                                $modelos = new ModelosController();
                                $modelos->mostarModelosServiciosController();
                             ?>
                        </div>
                    </div>
                    <!-- end .rent-carousel-->
                </div>
            </section>
            <!-- end .section-rent-->
            <div class="section-default wrap-inl-bl">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <section class="b-advantages-5"><i class="b-advantages-5__icon fa fa-heart-o"></i>
                                <h3 class="b-advantages-5__title">Millions Trusted</h3>
                                <div class="b-advantages-5__info">MotorLand is nisi aliquip ea consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                        </div>
                        <div class="col-md-4">
                            <section class="b-advantages-5"><i class="b-advantages-5__icon fa fa-headphones"></i>
                                <h3 class="b-advantages-5__title">24 Hours Support</h3>
                                <div class="b-advantages-5__info">MotorLand is nisi aliquip ea consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                        </div>
                        <div class="col-md-4">
                            <section class="b-advantages-5"><i class="b-advantages-5__icon fa fa-shirtsinbulk"></i>
                                <h3 class="b-advantages-5__title">Quality Assurance</h3>
                                <div class="b-advantages-5__info">MotorLand is nisi aliquip ea consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                        </div>
                        <div class="col-md-4">
                            <section class="b-advantages-5"><i class="b-advantages-5__icon fa fa-usd"></i>
                                <h3 class="b-advantages-5__title">No Booking Fee</h3>
                                <div class="b-advantages-5__info">MotorLand is nisi aliquip ea consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                        </div>
                        <div class="col-md-4">
                            <section class="b-advantages-5"><i class="b-advantages-5__icon fa fa-car"></i>
                                <h3 class="b-advantages-5__title">Well Maintained Cars</h3>
                                <div class="b-advantages-5__info">MotorLand is nisi aliquip ea consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                        </div>
                        <div class="col-md-4">
                            <section class="b-advantages-5"><i class="b-advantages-5__icon fa fa-trophy"></i>
                                <h3 class="b-advantages-5__title">Award Winners</h3>
                                <div class="b-advantages-5__info">MotorLand is nisi aliquip ea consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .section-default-->
            <section class="section-isotope">
                <div class="section-isotope__header bg-grey">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center">
                                    <h2 class="ui-title-block">Photo Gallery</h2>
                                    <div class="ui-subtitle-block">Tempor incididunt labore dolore magna cillium fugiat</div>
                                    <div class="ui-decor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-isotope">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="b-isotope-filter list-inline">
                                    <li class="current"><a href="" data-filter="*">all</a>
                                    </li>
                                    <!--<li><a href="" data-filter=".sale">for sale</a>
                                    </li>-->
                                    <li><a href="" data-filter=".new">new arrivals</a>
                                    </li>
                                    <li><a href="" data-filter=".top">top brands</a>
                                    </li>
                                    <li><a href="" data-filter=".ferrari">Toyota</a>
                                    </li>
                                    <li><a href="" data-filter=".mercedes">Nissan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="b-isotope-grid grid list-unstyled">
                        <li class="grid-sizer"></li>
                        <?php 
                                $servicios = new ServiciosController();
                                $servicios->galeriaController();
                         ?>
                    </ul>
                </div>
                <!-- end .b-isotope-->
            </section>
            <!-- end .section-isotope-->
            <div class="b-info-2 bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="b-info-2__title">We have vehicles for all your rental needs</div>
                        </div>
                        <div class="col-md-4">
                            <div class="b-info-2__info"><i class="icon flaticon-technology"></i> +1 (786) 365-4846</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .b-info-2-->
            <section class="section-reviews-2 section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center">
                                <h2 class="ui-title-block">What Clients Say</h2>
                                <div class="ui-decor"></div>
                            </div>
                            <div class="carousel-reviews-2 owl-carousel owl-theme enable-owl-carousel" data-min768="1" data-min992="2" data-min1200="3" data-margin="30" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true">
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-1.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">Nick William</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-3.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">James Liam</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-2.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">Nick William</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-1.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">Nick William</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-3.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">James Liam</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-2.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">Nick William</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-1.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">Nick William</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-3.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">James Liam</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-3">
                                    <blockquote>
                                        <p>Motorland uis aute irure reprehender voluptate velit acium fugiat nulla pariatur lorem excepter ipsum dolor magna aliqua. Ut enim minim veniam quis nostrud exercit sed ipsum dui ation ullamco.</p>
                                    </blockquote>
                                    <div class="b-blockquote__footer">
                                        <div class="b-blockquote__img">
                                            <img src="views/media/components/b-blockquote/face-2.jpg" alt="foto" />
                                        </div>
                                        <cite class="b-blockquote__cite"><span class="b-blockquote__author">Nick William</span><span class="b-blockquote__category">Client</span></cite>
                                    </div>
                                </div>
                                <!-- end .b-blockquote-->
                            </div>
                            <!-- end .carousel-reviews-2-->
                        </div>
                    </div>
                </div>
            </section>

        <?php include "footer.php"; ?>        
</div>


       