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
    <title>Inicio</title>
</head>
<body>

    <h1> <center>TIENDAS EC</center> </h1>
    <br>
    
    <h2>Bienvenido <?php echo $_SESSION['user']['user_tienda']; ?></h2>
    <br>
    
    <h2>Nombre de la tienda: <?php echo $_SESSION['user']['nom_tienda'];?> </h2>
    
    <h3>Productos en la tienda:</h3>
    
    <center>
    <table border="2">
        <tr>
            <th>Código</th>
            <th>Nombre</th>            
            <th>Tipo</th>
            <th>Stock</th>
            <th>Precio</th>
        </tr>

        <?php mostrar_tabla();?>
    </table>
    </center>
    
    <br>
    <br>
    
    <a href="nuevo_producto.php"> Registrar nuevo producto</a>

    <br>
    <br>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

</body>
</html>