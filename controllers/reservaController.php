<?php
require_once("C:/xampp/htdocs/reservoir/models/reserva.php");
    //require_once"/xampp/htdocs/proyect/models/Reserva.php";
    
    class ReservaController {
        public $reserva;
        public function __construct(){
            $this->reserva = new Reserva();
        }
        public function crear($rut=null,$nombre=null) {
            if($_SERVER['REQUEST_METHOD'] == 'GET') {
                include"views/sections/cabecera.php";
                include 'views/form_reserva.php';
                include  'views/sections/pie.php';
            
                

            }
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->reserva->setRut($_POST['rut']);
                $this->reserva->setNombre($_POST['nombre']);
                      if($this->reserva->crear()){
                          include "views/sections/cabecera.php";
                          
                         
                          echo "<div class='container'>&nbsp;&nbsp;&nbsp;&nbsp;Reserva ingresada correctamente <br/>";
                          echo "<button><a href='menu.php'>ir a menu</a><br><button><a href='index.php'>volver</a><br></button></div><br><br>";
                          include  'views/sections/pie.php';
                             
                      }
                      else{
                          echo "<div class='container'>no se pudo realizar la reserva <br/>";
                          echo "<button><a href='index.php'>Volver</a><button></button></div>";
                          include "views/sections/cabecera.php";
                          include  'views/sections/pie.php';
               }
           }
       }
    }
?>