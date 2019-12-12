<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta content="" name="description" />
<meta content="" name="keywords" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
<script>
function pulsar(e) {
  // averiguamos el código de la tecla pulsada (keyCode para IE y which para Firefox)
  var tecla = (document.all) ? e.keyCode : e.which;
  // si la tecla no es 13 devuelve verdadero,  si es 13 devuelve false y la pulsación no se ejecuta

  return (tecla!=13);
}
</script>  


<div id="wrapper" class="clearfix">

    <?php include "cabezera.php"; ?>

<div class="section-title-page area-bg area-bg_dark area-bg_op_70" style="margin-top: 0;">
                <div class="area-bg__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="b-title-page bg-primary_a">Models</h1>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<!-- end breadcrumb-->
<div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <main class="l-main-content">
                            <div class="filter-goods">
                                <div class="filter-goods__info">Showing results from<strong> 1 - 6</strong> of total<strong> 52</strong>
                                </div>
                                <div class="filter-goods__select">
                                    <div class="btns-switch"><i class="btns-switch__item js-view-th icon fa fa-th-large"></i><i class="btns-switch__item js-view-list active icon fa fa-th-list"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- end .filter-goods-->
                            <div class="goods-group-2 list-goods" id="container-sections">
                            </div>
                            <!-- end .goods-group-2-->
                            <ul class="pagination text-center" id="pagination">  
                            </ul>
                        </main>
                        <!-- end .l-main-content-->
                    </div>
                    <div class="col-md-3">
                        <aside class="l-sidebar">
                            <form class="b-filter-2 bg-grey">
                                <h3 class="b-filter-2__title">search options</h3>
                                <div class="b-filter-2__inner">
                                    <div class="b-filter-2__group">
                                        <div class="b-filter-2__group-title">Search Model</div>
                                           <input class="form-control" onkeypress="return pulsar(event)" type="text" id="buscar" name="buscar" placeholder="Keyword..." /> 
                                    </div>
                                    <div class="b-filter-2__group">
                                        <div class="b-filter-2__group-title">Brand</div>
                                        <select class="selectpicker" data-width="100%" id="selector">
                                            <option value="0">All Brands</option>
                                            <?php 
                                                $marca = new ModelosController();
                                                $marca->seleccionarMarcasController();
                                             ?>
                                        </select>
                                    </div>
                                    <div class="b-filter-2__group">
                                        <div class="b-filter-2__group-title">Seats</div>
                                        <select class="selectpicker" data-width="100%" id="puestolector">
                                            <option>All</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="b-filter-2__group">
                                        <div class="b-filter-2__group-title">Filter Price</div>
                                        <div class="ui-filter-slider">
                                            <div id="slider-price"></div>
                                            <div class="ui-filter-slider__info">
                                                <div class="ui-filter-slider__label">Price Range:</div><span class="ui-filter-slider__current" id="slider-snap-value-lower"></span>-<span class="ui-filter-slider__current" id="slider-snap-value-upper"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-filter-2__group">
                                        <div class="b-filter-2__group-title">Categories</div>
                                        <div class="b-filter-type-2">
                                            <?php 
                                                $categoria = new ModelosController();
                                                $categoria->mostrarCategoriasController();
                                             ?>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- end .b-filter-->
                        </aside>
                        <!-- end .l-sidebar-->
                    </div>
                </div>
</div>
<?php include "footer.php"; ?>
</div>
