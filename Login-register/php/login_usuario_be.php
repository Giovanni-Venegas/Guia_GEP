<?php

    session_start();
    
    include 'conexion_be.php';
    $email_institucional = $_POST['email_institucional'];
    $contrasena = hash('sha512', 'contrasena');

    $validar_login = mysqli_query ($conexion, "SELECT * FROM usuario WHERE 
                     email_institucional='$email_institucional' and contrasena='$contrasena'");

    if (mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email_institucional;
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
            <script>
                alert("Profesor no existe, verifique los datos");
                window.location = "../index.php";
            </script>
        ';
    exit;
    }
?>