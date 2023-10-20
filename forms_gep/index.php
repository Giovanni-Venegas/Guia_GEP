<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Guía GEP</title>
    <link rel="stylesheet" href="assets/main.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="content">

        <h1 class="logo">Registro <span> Guía GEP</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Datos de identificación - Por asignatura</h3>
                <form action="php/registro_gep.php" method ="POST" class="formulario__register">
                    <p>
                        <label>Nombre de la materia</label>
                        <input type="text" name="nombre_materia">
                    </p>
                    <p>
                        <label>Periodo</label>
                        <input type="text" name="periodo">
                    </p>
                    <p>
                        <label>Obligatoria (1)/Optativa(2)</label>
                        <input type="text" name="tipo_materia">
                    </p>
                    <p>
                        <label>Clave</label>
                        <input type="text" name="clave_materia">
                    </p>
                    <p>
                        <label>Sigla</label>
                        <input type="text" name="sigla_materia">
                    </p>
                    <p>
                        <label>Grupo</label>
                        <input type="text" name="grupo_materia">
                    </p>
                    <p>
                        <label>Nombre del programa</label>
                        <input type="text" name="nombre_programa">
                    </p>
                    <p>
                        <label>Clave del programa</label>
                        <input type="text" name="clave_programa">
                    </p>
                    <p>
                        <label>Coordinación</label>
                        <input type="text" name="coordinacion">
                    </p>
                    <p>
                        <label>Clave de la coordinación</label>
                        <input type="text" name="clave_coordinacion">
                    </p>
                    <p>
                        <label>Dirección</label>
                        <input type="text" name="direccion">
                    </p>
                    <p>
                        <label>Clave de la dirección</label>
                        <input type="text" name="clave_direccion">
                    </p>
                    <p>
                        <label>Horas de Teoria</label>
                        <input type="text" name="horas_teoria">
                    </p>
                    <p>
                        <label>Horas de practica</label>
                        <input type="text" name="horas_practica">
                    </p>
                    <p>
                        <label>Total de Horas</label>
                        <input type="text" name="total_horas">
                    </p>
                    <p>
                        <label>Creditos de Teoría</label>
                        <input type="text" name="creditos_teoria">
                    </p>
                    <p>
                        <label>Creditos de Práctica</label>
                        <input type="text" name="creditos_practica">
                    </p>
                    <p>
                        <label>Total de creditos</label>
                        <input type="text" name="total_creditos">
                    </p>
                
                    
                    <h3>Datos de identificación - Por docente</h3>
                    
                    <p>
                        <label>Nombre</label>
                        <input type="text" name="nombre_docente">
                    </p>
                    <p>
                        <label>Correo</label>
                        <input type="email" name="correo_docente">
                    </p>
                    <p class="block">
                        <label>Formación</label> 
                         <textarea name="formacion" rows="3"></textarea>
                     </p>
                

                <h3>Sintesis Curricular</h3>
                
                
                <p class="block">
                    <label>Sintesis Curricular</label> 
                     <textarea name="sistesis_curricular" rows="3"></textarea>
                 </p>
                <p class="block">
                    <button>
                        Enviar
                    </button>
                </p>
            </form>
            </div>
            <div class="contact-info">
                <h4>More Info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Baker Street</li>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Company.com</p>
            </div>
        </div>

    </div>

</body>
</html>