<?php 
include('../common/utils_sin_sesion.php');

if($_POST){
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['nom_tienda']) && isset($_POST['rep_pass']) &&
     !empty($_POST['username']) && !empty($_POST['password']) &&
     !empty($_POST['nom_tienda']) && !empty($_POST['rep_pass'])) {
        $nom_tienda = $_POST['nom_tienda'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rep_pass = $_POST['rep_pass'];
        
        if($password == $rep_pass){
    
            $sql_insert = "INSERT INTO tienda
		                (nom_tienda,user_tienda,clave_tienda,rep_clave)
		                VALUES ('$nom_tienda','$username',MD5('$password'),MD5('$rep_pass'))";

		        echo $sql_insert;
		        $conn->query($sql_insert);

                if ($conn->error) {
                    echo 'Ocurrió un error ' . $conn->error;
                } 
                
                header('Location: ../index.php?error_message=Tienda registrada exitosamente, puede iniciar sesion');
	            exit;

        }else{
            header('Location: ../registro_tienda.php?error_message=Las contraseñas no coinciden!');
		    exit;
        }

	} else {
		header('Location: ../registro_tienda.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../registro_tienda.php');
	exit;
}

?>