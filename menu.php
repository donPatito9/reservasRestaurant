<?php

require("controllers/pedidoController.php");
$pedidoController= new PedidoController();

$validacion = (isset($_GET['op']) && !empty($_GET['op']));

if(!$validacion){
    $pedidoController->inicio();
}else{
    $op=$_GET["op"];

    if($op=="listar"){
        $pedidoController->listar();
    }
    if($op=="listar2"){
        $pedidoController->listar2();
    }
    if($op=="agregar"){
        $pedidoController->agregar();
        echo "Pedido Agregado Correctamente<br/>";
    }
    if($op=="agregarPedido"){
        $mesa =$_POST['txtMesa'];
        $descripcion = $_POST['txtDescripcion'];
        $pedidoNuevo = new Pedido();
        $pedidoNuevo->setMesa($mesa);
        $pedidoNuevo->setDescripcion($descripcion); 
        $pedidoController->agregarPedido($pedidoNuevo);
        echo "Pedido agregado correctamente <br/>";
    }
    if($op=="inicio"){
        $pedidoController->inicio();
    }
    if($op=="eliminar"){
        $mesa = $_GET['mesa'];
        $pedidoController->eliminar($mesa);
    }
    if($op=="finalizar"){
        $mesa = $_GET['mesa'];
        $pedidoController->eliminar($mesa);
    
    }

  
}

?>
