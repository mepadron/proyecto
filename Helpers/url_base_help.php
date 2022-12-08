<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("./Config/base_url_conf.php");

class BaseUrl{

    public function baseUrl(){
        return BASE_URL;
    }
}

$baseUrl = new BaseUrl();
// echo $baseUrl->baseUrl();