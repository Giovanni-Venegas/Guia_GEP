<?php

    include 'conexion_be.php';
    
            $Apellido_paterno = $_POST['Apellido_paterno'];
            $Apellido_materno = $_POST['Apellido_materno'];
            $Nombre = $_POST['Nombre'];
            $No_de_cuenta = $_POST['No_de_cuenta'];
            $Tipo_de_profesor = $_POST['Tipo_de_profesor'];
            $email_institucional = $_POST['email_institucional'];
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $contrasena = hash('sha512', 'contrasena');

        $query = "INSERT INTO usuario (Apellido_paterno, Apellido_materno, Nombre, No_de_cuenta,
                                        Tipo_de_profesor, email_institucional, Usuario, Contrasena)
                                        VALUES ('$Apellido_paterno', '$Apellido_materno','$Nombre','$No_de_cuenta','$Tipo_de_profesor',
                                                '$email_institucional','$usuario', '$contrasena')";
        
        //Verificar que el correo no se repita en la DB 
        $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE email_institucional='email_institucional' ");

        if (mysqli_num_rows($verificar_correo) > 0){
            echo '
            <script>
                alert ("Este correo ya esta registrado, intenta con otro diferente");
                windows.location ="../index.php";
                </script>
            ';
            exit();
        }

        //Verificar que el nombre de usuario no se repita en la Db
        
        $verificar_usuario = mysqli_query ($conexion, "SELECT * FROM usuario WHERE usuario='usuario' ");

        if (mysqli_num_rows($verificar_usuario) > 0){
            echo '
            <script>
                alert ("Este usuario ya esta registrado, intenta con otro diferente");
                windows.location ="../index.php";
                </script>
            ';
            exit();
        }


        $ejecutar = mysqli_query($conexion, $query);

        if($ejecutar){
            echo '
            <script>
                alert ("Profesor almacenado exitosamente");
                windows.location ="../index.php";
                </script>
            ';
        }else {
            echo '
            <script>
                alert ("Profesor no almacenado, intentalo de nuevo");
                windows.location ="../index.php";
                </script>
            ';
        }

        mysqli_close($conexion);
?>

