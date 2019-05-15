<?php 
include('../common/utils.php');
if($_POST) {
    if (isset($_POST['username']) && isset($_POST['password']) && 
        !empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT *
		FROM tienda
		WHERE user_tienda='$username'
		AND clave_tienda=MD5('$password')";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['user'] = [
						'user_tienda' => $row['user_tienda'],
						'nom_tienda' => $row['nom_tienda'],
						'id_tienda' => $row['id_tienda']
					];
					redirect('../inicio.php');
				}
		} else {
			redirect('../index.php?error_message=Usuario o clave incorrectos!');
		}

	} else {
		redirect('../index.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../index.php');
}