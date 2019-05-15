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
	<title>Productos</title>
</head>
<body>
   
    <h2 class="display-2 text-center"> Tienda <span class="text-muted text-uppercase"> 
    <?php echo $_SESSION['user']['nom_tienda'];?> </span>  </h2>
    <br>
    <h2 class="display-5"> <center>Registro de nuevo producto</center> </h2>
    <br>

<?php if(isset($error_message)) { ?>
	<div class="text-danger text-center"><strong><?php echo $error_message; ?></strong></div>   
    <br>
<?php } ?>

    <form action="php/process_producto.php" method="post">
    <div class="container col-4">
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Codigo</label>            
            </div>
            <div class="col">
                <input type="text" name="codigo" class="form-control">            
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Nombre</label>    
            </div>
            <div class="col">
		        <input type="text" name="nombre" class="form-control">        
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Tipo</label>
            </div>
            <div class="col">
                <select name="tipo" class="form-control form-control-sm">
                    <option value="Alimento">Alimento</option>
                    <option value="Vestimenta">Vestimenta</option>
                    <option value="Salud">Salud</option>
                </select>       
            </div>            
        </div>
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Cantidad</label>
            </div>
            <div class="col">
                <input type="text" name="cantidad" class="form-control">                      
            </div>      
        </div>
        <div class="form-group row">
            <div class="col-4 text-md-right">
                <label>Precio</label>
            </div>
            <div class="col">
		        <input type="text" name="precio" class="form-control">                    
            </div>
        </div>
        <div class="form-group text-center">
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