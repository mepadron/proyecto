<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);



class PersonasController{

    public function __construct()
    {
        
    }

    public function index()
    {
        require_once("./Views/PresonasView.php");

    }

    public function login()
    {
        echo "esta llamando a login";

    }
}