<?php

require_once("C:/xampp/htdocs/examen/models/pedido.php");

class PedidoController
{

    public $pedido;

    public function __construct()
    {
        $this->pedido = new Pedido();
    }

    public function listar()
    {
        $pedidos = $this->pedido->listar();
        include 'views/listado.php';
    }
    public function listar2()
    {
        $pedidos = $this->pedido->listar();
        include 'views/produccion.php';
    }


    public function inicio()
    {
        include 'views/inicio.php';
    }

    public function agregar()
    {
        include 'views/agregar.php';
    }

    public function agregarPedido($pedidoNuevo)
    {
      $this->pedido->agregar($pedidoNuevo);
      $pedidos = $this->pedido->listar();
      include 'views/listado.php';
    }

    public function eliminar($mesa)
    {
        $this->pedido->eliminar($mesa);
        $pedidos = $this->pedido->listar();
        include 'views/listado.php';
    }

    public function finalizar($mesa)
    {
        $this->pedido->eliminar($mesa);
        $pedidos = $this->pedido->listar();
        include 'views/produccion.php';
    }

}
?>