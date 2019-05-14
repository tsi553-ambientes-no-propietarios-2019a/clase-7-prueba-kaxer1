<?php 
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
	<title>Registro</title>
</head>
<body>

    <h1> <center>TIENDAS EC</center> </h1>
    <br>
    <br>
	<h2> <center>Registro de usuarios</center> </h2>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>

    <form action="php/process_registration.php" method="post">
        <div>
            <label>Nombre de la tienda: </label>
            <input type="text" name="nom_tienda">
        </div>
        <div>
            <label>Usuario: </label>
		    <input type="text" name="username">        
        </div>
        <div>
            <label>Password: </label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Repetir password</label>
		    <input type="password" name="rep_pass">        
        </div>
        <div>
    		<button>Registrar!</button>
        </div>
	</form>
</body>
</html>