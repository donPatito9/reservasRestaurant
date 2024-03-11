<?php
require_once("DB.php");

class Pedido {

    //Declaración de Atributos
    private $mesa;
    private $descripcion;
    /**private $apellido;  
    private $direccion;  
    private $ciudad; 
    private $telefono;*/
   
    //Declaración de constructor
    public function __construct(){

    }

    //Declaración de accesadores y mutadores
    public function getMesa(){
        return  $this->mesa;
    }

    public function setMesa($mesa){
        $this->mesa = $mesa;
    }

    public function getDescripcion(){
        return  $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function agregar($pedido){

        $mesa= $pedido->getMesa();
        $descripcion= $pedido->getDescripcion(); 

        $db= new DB();
        $stmt =  $db->getConexion()->prepare("INSERT INTO pedidos (mesa, descripcion) VALUES (?,?)");
        $stmt->bindParam(1,  $mesa);
        $stmt->bindParam(2,  $descripcion);
      
        $stmt->execute();
    }
    public function eliminar($mesa){
        $db= new DB();
        $stmt =  $db->getConexion()->prepare("DELETE FROM pedidos WHERE mesa = ?");
        $stmt->bindParam(1, $mesa);
        $stmt->execute();
    }

    public function listar(){
        $db= new DB();
        $sql = "SELECT * FROM pedidos";
        $stmt = $db->getConexion()->prepare($sql);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        foreach ($rs as $fila) { 
           $pedido= new Pedido();
           $pedido->setMesa($fila["mesa"]);
           $pedido->setDescripcion($fila["descripcion"]); 
           $pedidos[] =$pedido;
        }
        return $pedidos;
    
    }  
}
   
?>
