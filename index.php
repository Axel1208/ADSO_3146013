<?php 
require "controller.php";

$controller = new Controller;

$controller->index();
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $controller->guardar();
}