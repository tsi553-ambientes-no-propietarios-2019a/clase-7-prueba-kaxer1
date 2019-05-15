<?php
include('common/utils.php');
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
    <br>
    
    <h2>Bienvenido <?php echo $_SESSION['user']['user_tienda']; ?></h2>
    <br>
    
    <h2>Nombre de la tienda: <?php echo $_SESSION['user']['nom_tienda'];?> </h2>
    
    <h3>Productos en la tienda:</h3>
    <br>



    <a href="registro_producto.php"> Registrar nuevo producto</a>




    <br>
    <br>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

</body>
</html>