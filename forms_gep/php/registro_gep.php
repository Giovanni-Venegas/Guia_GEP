<?php

    include 'conexion_gep.php';
    
            $nombre_materia = $_POST['nombre_materia'];
            $periodo = $_POST['periodo'];
            $tipo_materia = $_POST['tipo_materia'];
            $clave_materia = $_POST['clave_materia'];
            $sigla_materia = $_POST['sigla_materia'];
            $grupo_materia = $_POST['grupo_materia'];
            $nombre_programa = $_POST['nombre_programa'];
            $clave_programa = $_POST['clave_programa'];
            $coordinacion = $_POST['coordinacion'];
            $clave_coordinacion = $_POST['clave_coordinacion'];
            $direccion = $_POST['direccion'];
            $clave_direccion = $_POST['clave_direccion'];
            $horas_teoria = $_POST['horas_teoria'];
            $horas_practica = $_POST['horas_practica'];
            $total_horas = $_POST['total_horas'];
            $creditos_teoria = $_POST['creditos_teoria'];
            $creditos_practica = $_POST['creditos_practica'];
            $total_creditos = $_POST['total_creditos'];
            $nombre_docente = $_POST['nombre_docente'];
            $correo_docente = $_POST['correo_docente'];
            $formacion = $_POST['formacion'];
            $sistesis_curricular = $_POST['sistesis_curricular'];


        $query = "INSERT INTO forms_gep (nombre_materia, periodo, tipo_materia, clave_materia,
                                        sigla_materia, grupo_materia, nombre_programa, clave_programa, coordinacion,
                                        clave_coordinacion, direccion, clave_direccion, horas_teoria, horas_practica,
                                        total_horas, creditos_teoria, creditos_practica, total_creditos, nombre_docente,
                                        correo_docente, formacion, sistesis_curricular)

                                        VALUES ('$nombre_materia', '$periodo','$tipo_materia','$clave_materia','$sigla_materia',
                                                '$grupo_materia','$nombre_programa', '$clave_programa', '$coordinacion', '$clave_coordinacion',
                                                '$direccion', '$clave_direccion', '$horas_teoria', '$horas_practica', '$total_horas', '$creditos_teoria', 
                                                '$creditos_practica', '$total_creditos', '$nombre_docente', '$correo_docente', '$formacion',
                                                '$sistesis_curricular')";
        
        /*Verificar que el correo no se repita en la DB 
        $verificar_correo = mysqli_query($conexion, "SELECT * FROM forms_gep WHERE email_institucional='email_institucional' ");

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
        }*/


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


