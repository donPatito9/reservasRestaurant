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
                        <a class="nav-link" href="menu.php?op=agregar">Agregar Pedido</a>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php?op=listar">Listar Pedidos</a>
                    </li>
                </ul>
            </div>
        </nav>

            <div class="card-body">
                <h2 class="card-title">Pedido</h2>
                <br>
                <form class="row" action="menu.php?op=agregarPedido" method="post">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="row">
                            <th>Mesa</th>
                            <select class="form-select"name="txtMesa" >
                                    <option selected>Seleccionar Mesa</option>
                                    <option value="1">Mesa 1</option>
                                    <option value="2">Mesa 2</option>
                                    <option value="3">Mesa 3</option>
                                    <option value="4">Mesa 4</option>
                                    <option value="5">Mesa 5</option>
                                    <option value="6">Mesa 6</option>
                                    <option value="7">Mesa 7</option>
                                    <option value="8">Mesa 8</option>
                                    <option value="9">Mesa 9</option>
                                    <option value="10">Mesa 10</option>
                                    <option value="11">Mesa 11</option>
                                    <option value="12">Mesa 12</option>
                                    <option value="13">Mesa 13</option>
                                    <option value="14">Mesa 14</option>
                                    <option value="15">Mesa 15</option>
                                    <option value="16">Mesa 16</option>
                                    <option value="17">Mesa 17</option>
                                    <option value="18">Mesa 18</option>
                                    <option value="19">Mesa 19</option>
                                    <option value="20">Mesa 20</option>
                            </select><br>

                            <th>Descripcion</th>
			                
                              
                            <textarea class="form-control" name="txtDescripcion" placeholder="Ingrese descripcion del pedido" required></textarea>
                        </div>
                        <br>
                        <div class="row">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div><br>
                        <div class="row">
                            <button class="btn btn-warning"href="menu.php?=listar2">Ver Pedido</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-footer text-muted"> <a href="menu.php?op=inicio">volver al Menu</a></div>
    </body>

    </html>