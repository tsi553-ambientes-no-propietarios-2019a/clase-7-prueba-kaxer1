<?php 
include('../common/utils.php');

if($_POST){
    if (isset($_POST['nombre']) && isset($_POST['codigo']) &&
        isset($_POST['precio']) && isset($_POST['cantidad']) && isset($_POST['tipo']) &&
     !empty($_POST['nombre']) && !empty($_POST['codigo']) && !empty($_POST['tipo']) &&
     !empty($_POST['precio']) && !empty($_POST['cantidad'])) {
        $nombre = $_POST['nombre'];
        $codigo = $_POST['codigo'];
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        $id_tienda = $_SESSION['user']['id_tienda'];

        $sql_insert = "INSERT INTO producto
		            (codigo,nombre,tipo,cantidad,precio,id_tienda_fk)
		            VALUES ('$codigo','$nombre','$tipo','$cantidad','$precio','$id_tienda')";

		    echo $sql_insert;
		    $conn->query($sql_insert);

            if ($conn->error) {
                echo 'Ocurrió un error ' . $conn->error;
            }   

            header('Location: ../inicio.php?error_message=Producto registrado exitosamente');
	        exit;
        
	} else {
		header('Location: ../nuevo_producto.php?error_message=Por favor, llene todos los campos');
		exit;
	}
} else {
	header('Location: ../nuevo_producto.php');
	exit;
}

?>