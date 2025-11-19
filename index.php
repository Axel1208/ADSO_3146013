<?php

//var_dump($_GET[]'controlador']);

if(!isset($_GET['c'])){
    require_once "controllers/UsuarioController.php";
    $controller = new Controller();
    call_user_func(array($controller, "index"));
}else{
    $controller = $_GET['c'];
    require_once "$controller.controllers/UsuarioController.php";
    $controller = ucwords($controller)."controllers/UsuarioController";
    $controller = new $controller;
    $accion = isset($_GET['a']) ? $_GET['a'] : "index" ;
    call_user_func(array($controller,$accion));

}