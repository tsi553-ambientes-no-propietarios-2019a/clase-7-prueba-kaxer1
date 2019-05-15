<?php

function mostrar_tabla(){

$id_tienda = $_SESSION['user']['id_tienda'];

    $conn = new mysqli('localhost', 'root', '', 'pruebab1');
    $sql_select = "select * from producto
                where id_tienda_fk = $id_tienda";
    $result = mysqli_query($conn,$sql_select);

    while($mostrar = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>'.$mostrar['codigo'].'</td>';
        echo '<td>'.$mostrar['nombre'].'</td>';
        echo '<td>'.$mostrar['tipo'].'</td>';
        echo '<td>'.$mostrar['cantidad'].'</td>';
        echo '<td>'.$mostrar['precio'].'</td>';
        echo '</tr>';
    }
    echo '<br>';


}



?>