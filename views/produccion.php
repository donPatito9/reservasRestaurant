<DOCTYPE html>
        <html>

        <head>
            <meta charset='utf-8'>
            <title>Examen WEBOS</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            
        </head>

        <body>
            <div class="card text-center">
                <div class="card-header">
                    Restaurant Reservoir
                </div>

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="menu.php">Menú</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="menu.php?op=agregar">Ir a Pedidos</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="menu.php?op=listar2">Ver Produccion</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="card-body">
                    <h2 class="card-title">Ver Produccion</h2>
                    <p class="card-text"></p>

                </div>
                <div class="card-footer text-muted">

                </div>
                

            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th scope="col">mesa</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        foreach ($pedidos as $pedido) { ?>
                            
                            <td><?php echo $pedido->getMesa() ?></td>
                            <td><?php echo $pedido->getDescripcion() ?></td>
                            <td><a href="menu.php?op=eliminar&mesa=<?php echo $pedido->getMesa() ?>">Finalizar</a></td>
                    </tr>
                <?php    } ?>
                </tbody>
            </table>
            
            <div class="card-footer text-muted"> <a href="menu.php?op=inicio">volver al Menu</a></div><br>
            <div class="card-footer text-muted"> <a href="index.php">Salir al index</a></div>
        </body>

        </html>