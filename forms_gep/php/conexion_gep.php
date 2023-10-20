<?php
    $conexion = mysqli_connect("localhost", "root", "", "login_register_db_gep");

    if ($conexion){
        echo 'Conectado existosamente a la Base de datos';
}
else {
        echo 'No se ha posido conectar a la Base de datos';
}
?>