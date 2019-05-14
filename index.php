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
    <title>Login</title>
</head>
<body>

    <h1> <center>TIENDAS EC</center> </h1>
    <br>
    <br>
    <h2> <center>Inicio de Sesion</center></h2>
    <br>

    <?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
    <?php } ?>

    <form action="php/process_login.php" method="post">
        <div>
            <label>Usuario: </label>
            <input type="text" name="username" placeholder="Usuario">
        </div>
        <div>
            <label>Contraseña:</label>
            <input type="password" name="password" placeholder="Contraseña">
        </div>
        <div>
            <button>Ingresar</button>
        </div>
        <div>
            <a href="registro_tienda.php"> Resgistrar mi tienda</a>
        </div>
    </form>
</body>
</html>
