<?php
date_default_timezone_set('America/Lima');

require_once 'config/paths.php';
require_once 'config/database.php';

require_once "libs/Controller.php";
require_once "libs/Inicio.php";
require_once "libs/Session.php";
require_once "libs/View.php";
require_once "libs/Database.php";
require_once "libs/Model.php";

$app = new Inicio();
$app->init();