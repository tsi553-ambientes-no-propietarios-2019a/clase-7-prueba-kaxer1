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
	<title>Productos</title>
</head>
<body>

    <h1> <center>TIENDAS EC</center> </h1>
    <br>
	<h2> <center>Registro de nuevo producto</center> </h2>
    <br>
    
    <h2> TIENDA: <?php echo $_SESSION['user']['nom_tienda'];?> </h2>
    <br>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>   
    <br>
<?php } ?>

    <form action="php/process_producto.php" method="post">
        <div>
            <label>Codigo: </label>
            <input type="text" name="codigo">
        </div>
        <div>
            <label>Nombre: </label>
		    <input type="text" name="nombre">        
        </div>
        <div>
            <label>Tipo: </label>
            <select name="tipo">
                <option value="Alimento">Alimento</option>
                <option value="Vestimenta">Vestimenta</option>
                <option value="Salud">Salud</option>
            </select>
        </div>
        <div>
            <label>Cantidad</label>
		    <input type="text" name="cantidad">        
        </div>
        <div>
            <label>Precio: </label>
		    <input type="text" name="precio">        
        </div>
        <div>
    		<button>Registrar!</button>
        </div>
    </form>
    
</body>
</html>