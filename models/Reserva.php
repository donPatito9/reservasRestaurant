<?php
require_once "db.php";
class Reserva {
    private $id, $rut, $nombre, $fecha_hora;

    public function __construct($id=null, $rut=null, $nombre=null, $fecha_hora=null)
    {
        $this->id= $id;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->fecha_hora = $fecha_hora;
    }
    //getters
    public function getId(){
        return $this->id;
    }
    public function getRut(){
        return $this->rut;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getFecha_hora(){
        return $this->fecha_hora;
    }
    //setters
    public function setId($id){
        $this->id=$id;
    }
    public function setRut($rut){
        $this->rut = $rut;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setFecha_hora($fecha_hora){
        $this->fecha_hora = $fecha_hora;
    }
    public function crear(){
        $db = new DB();
        $query = "INSERT INTO reservas (rut,nombre,fecha_hora) VALUES (?,?,NOW())";
        $sentencia = $db->getConexion()->prepare($query);
        $sentencia ->bindValue(1, $this->getRut());
        $sentencia ->bindValue(2,$this->getNombre());
        return $sentencia->execute();
    
    }
}


?>
