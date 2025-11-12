<?php
class controller {

    public $model;
    public $view;

    public function __construct(){
        $this->model = "usuario.php";
        $this->view = "view.php";
        require_once $this->model;

       $conexion = Usuario::connect();
       
    
    }

    public function index(){
        require_once $this ->view;
    }

    public function guardar (){
        
        $nuevoUsuario = new Usuario(null,$_POST['nombre'],$_POST['correo'], $_POST['rol'], $_POST['telefono']);
        

        $nuevoUsuario->insertar();
    
    }



}