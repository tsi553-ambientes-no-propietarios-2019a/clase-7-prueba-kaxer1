<?php 
include('../common/utils.php');

if($_POST){
    if (isset($_POST['nombre']) && isset($_POST['codigo']) &&
        isset($_POST['precio']) && isset($_POST['canditad']) &&
     !empty($_POST['nombre']) && !empty($_POST['codigo']) &&
     !empty($_POST['precio']) && !empty($_POST['cantidad'])) {
        $nombre = $_POST['nombre'];
        $codigo = $_POST['codigo'];
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        
       
    
            $sql_insert = "INSERT INTO producto
		                (codigo,nombre,tipo,cantidad,precio)
		                VALUES ('$codigo','$nombre','$tipo','$cantidad','$precio')";

		        echo $sql_insert;
		        $conn->query($sql_insert);

                if ($conn->error) {
                    echo 'Ocurrió un error ' . $conn->error;
                } 
                
    
                header('Location: ../index.php?error_message=Tienda registrada exitosamente, puede iniciar sesion');
	            exit;

           
        

	} else {
		header('Location: ../registro_producto.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../registro_producto.php');
	exit;
}

?>