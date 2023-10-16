<?php
    session_start8();

    if (!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert ("Por favor inicia sesión");
                window.location = "index.php";
            </script>
        ';
       
        session_destroy();
        die();
    }
    session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida -GEP</title>
</head>
<body>
    <h1> Bienvenido </h1>
</body>
</html>
