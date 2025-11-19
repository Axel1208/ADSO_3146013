<?php

class controller{
    public $model;
    public $view;

    public function __construct(){
        $this -> model = "models/Usuario.php";
        $this -> view  = "views/usuarios/lista.php";
        require_once $this -> model;
        
        $conexion = usuario::connect();
    }

    public function index(){
        $usuarios = Usuario::consultarTodos();

        require_once $this -> view;
       

    }

    public function guardar (){
        $nuevoUsuario = new Usuario(null, $_POST['nombre'], $_POST['correo'], $_POST['rol'], $_POST['telefono']);
        $nuevoUsuario->insertar();
    }
}