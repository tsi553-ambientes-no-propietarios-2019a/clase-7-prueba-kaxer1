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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Registro</title>
</head>
<body>

    <h1 class="display-2"> <center>TIENDAS EC</center> </h1>
    <br>
	<h2 class="display-5"> <center>Registro de usuarios</center> </h2>
    <br>

<?php if(isset($error_message)) { ?>
	<div class="text-center text-danger"><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
    <br>

    <form action="php/process_registration.php" method="post">
    <div class="container col-5" >
        <div class="form-group row">
            <div class="col text-md-right">
                <label>Nombre de la tienda</label>
            </div>
            <div class="col">
                <input type="text" name="nom_tienda" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="col text-md-right">
                <label>Usuario</label>
            </div>
            <div class="col">
		        <input type="text" name="username" class="form-control">                    
            </div>
        </div>
        <div class="form-group row">
            <div class="col text-md-right">
                <label>Password</label>
            </div>
            <div class="col">
                <input type="password" name="password" class="form-control">            
            </div>
        </div>
        <div class="form-group row">
            <div class="col text-md-right">
                <label>Repetir password</label>                
            </div>
            <div class="col"> 
		        <input type="password" name="rep_pass" class="form-control">                    
            </div>
        </div>
        <div class="form-group col text-md-center">
    		<button class="btn btn-primary">Registrar!</button>
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