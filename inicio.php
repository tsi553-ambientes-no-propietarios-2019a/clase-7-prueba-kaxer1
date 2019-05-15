<?php
include('common/utils.php');
include('php/process_mostrar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Inicio</title>
</head>
<body>

    <h1 class="display-2 text-center">TIENDAS EC</h1>

    <br>
    <div class="container col-lg text-center bg-light">
        <div class="form-group row">
            <div class="col">
                <h2 class="display-8">Bienvenido 
                <span class="text-muted text-uppercase"><?php echo $_SESSION['user']['user_tienda'];?></span>    
                </h2>
            </div>
            <div class="col">
                <h2 class="display-5">Nombre de la tienda 
                <span class="text-muted text-uppercase"><?php echo $_SESSION['user']['nom_tienda'];?></span> 
                </h2>
            </div>
            <div class="col">
                <a  href="php/logout.php">Cerrar sesión</a>
            </div>
        </div>
    </div>
    
    <br>    
    <h3 class="text-center">Productos en la tienda</h3>
    
    <div class="container col-7 text-center">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>            
                    <th scope="col">Tipo</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php mostrar_tabla();?>
            </tbody>
        </table>
    </div>

    <br>
    <br>
    <div class="text-center">
        <a href="nuevo_producto.php"> Registrar nuevo producto</a>       
    </div>
    



    <footer class="container py-5"> 
        <span>@ creado por KEVIN CURAY</span>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
</body>
</html>