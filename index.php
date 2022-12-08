<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require_once("./Helpers/url_base_help.php");
require_once("./Controllers/PersonasController.php");


// echo "hola -> ".$baseUrl->baseUrl();

$exec = new PersonasController();
$exec->index();

$controller = $_GET['ctrl'];

    var_dump($controller);
if(!empty($controller)){

    $exec->$controller();

}
