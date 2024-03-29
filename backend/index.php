<?php

require_once "models/enlaces.php";
require_once "models/ingreso.php";
require_once "models/gestorSlide.php";
require_once "models/gestorArticulos.php";
require_once "models/gestorGaleria.php";
require_once "models/gestorVideos.php";
require_once "models/gestorMensajes.php";
require_once "models/gestorModelos.php";
require_once "models/gestorSuscriptores.php";
require_once "models/gestorOrdenes.php";
require_once "models/gestorPerfiles.php";
require_once "models/gestorMenu.php";

require_once "controllers/template.php";
require_once "controllers/fechasController.php";
require_once "controllers/enlaces.php";
require_once "controllers/ingreso.php";
require_once "controllers/archivosController.php";
require_once "controllers/gestorSlide.php";
require_once "controllers/gestorArticulos.php";
require_once "controllers/gestorGaleria.php";
require_once "controllers/gestorVideos.php";
require_once "controllers/gestorMensajes.php";
require_once "controllers/gestorModelos.php";
require_once "controllers/gestorSuscriptores.php";
require_once "controllers/gestorOrdenes.php";
require_once "controllers/gestorPerfiles.php";
require_once "controllers/gestorMenu.php";

$template = new TemplateController();
$template -> template();