<?php

require_once "backend/models/conexion.php";
require_once 'models/enlaces.php';
require_once "models/gestorSlide.php";
require_once "models/gestorArticulos.php";
require_once "models/gestorGaleria.php";
require_once "models/gestorBusqueda.php";
require_once "models/gestorVideos.php";
require_once "models/gestorMensajes.php";
require_once "models/gestorMenu.php";
require_once 'models/gestorLocacion.php';
require_once "models/gestorReserva.php";
require_once "models/gestorModelos.php";
require_once "models/gestorServicios.php";

require_once "controllers/template.php";
require_once 'controllers/enlaces.php';
require_once "backend/controllers/fechasController.php";
require_once "controllers/gestorSlide.php";
require_once "controllers/gestorArticulos.php";
require_once "controllers/gestorGaleria.php";
require_once "controllers/gestorVideos.php";
require_once "controllers/gestorGaleria.php";
require_once "controllers/gestorBusqueda.php";
require_once "controllers/gestorMensajes.php";
require_once "controllers/gestorMenu.php";
require_once 'controllers/gestorLocacion.php';
require_once "controllers/gestorReserva.php";
require_once "controllers/gestorModelos.php";
require_once "controllers/gestorServicios.php";



$template = new TemplateController();
$template -> template();