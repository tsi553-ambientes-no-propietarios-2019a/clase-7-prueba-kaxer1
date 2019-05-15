<?php
include('common/utils.php');
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

    <h1 class="display-2"> <center>TIENDAS EC</center> </h1>
    <br>
    <h2 class="display-5"> <center>Inicio de Sesion</center></h2>
    <br>

    <?php if(isset($error_message)) { ?>
	<div class="text-center text-danger"><strong><?php echo $error_message; ?></strong></div>   <br>
    <?php } ?>

    <form action="php/process_login.php" method="post">
    <div class="container col-3">
        <div class="form-group">
            <label>Usuario: </label>
            <input type="text" name="username" placeholder="Usuario" class="form-control">
        </div>
        <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" name="password" placeholder="Contraseña" class="form-control">
        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary">Ingresar</button>
        </div>
        <div class="form-group text-center">
            <a href="registro_tienda.php"> Resgistrar mi tienda</a>
        </div>
    </div>
        
    </form>

    <footer class="container py-5"> 
        <span>@ creado por KEVIN CURAY</span>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
</body>
</html>
