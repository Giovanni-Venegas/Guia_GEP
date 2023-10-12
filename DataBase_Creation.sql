CREATE TABLE Profesor (
    ProfesorID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Apellido VARCHAR(50) NOT NULL,
    No_de_Cuenta VARCHAR(20) UNIQUE,
    Tipo_de_Profesor ENUM('ATC', 'PSPD') NOT NULL,
    Email VARCHAR(100),
    Correo_electronico_institucional VARCHAR(100),
    Materias_impartidas TEXT
);

/*
En este código, estamos creando una tabla llamada "GrupoAcademico" con dos columnas:

"GrupoID": Esta columna será la clave primaria y se configurará como un campo numérico que se incrementará automáticamente (AUTO_INCREMENT) para generar valores únicos. 
           Los valores de "GrupoID" serán definidos por el sistema automáticamente.
"NombreGrupo": Esta columna será de tipo VARCHAR(100), lo que permite almacenar cadenas de texto de hasta 100 caracteres, y se utilizará para almacenar los nombres de los 
               grupos académicos como "Grupos de programación", "Circuitos/electrónica", etc.*/

CREATE TABLE GrupoAcademico (
    GrupoID INT AUTO_INCREMENT PRIMARY KEY,
    NombreGrupo VARCHAR(100)
);

/*
En este código, estamos creando una tabla llamada "ProfesorGrupoAcademico" que actúa como una tabla de relación entre "Profesor" y "GrupoAcademico". 

Tiene dos columnas:

"ProfesorID": Esta columna será una clave foránea que hace referencia a la columna "ProfesorID" de la tabla "Profesor".
"GrupoID": Esta columna será una clave foránea que hace referencia a la columna "GrupoID" de la tabla "GrupoAcademico".

Hemos establecido una clave primaria compuesta utilizando la combinación de "ProfesorID" y "GrupoID" para asegurarnos de que cada relación sea única. Además, hemos configurado las claves foráneas para mantener la integridad referencial entre las tablas.
*/

CREATE TABLE ProfesorGrupoAcademico (
    ProfesorID INT,
    GrupoID INT,
    PRIMARY KEY (ProfesorID, GrupoID),
    FOREIGN KEY (ProfesorID) REFERENCES Profesor(ProfesorID),
    FOREIGN KEY (GrupoID) REFERENCES GrupoAcademico(GrupoID)
);

/*
En este código, estamos creando una tabla llamada "PeriodoAcademico" con tres columnas:

"PeriodoID": Esta columna será la clave primaria y se configurará como un campo numérico que se incrementará automáticamente (AUTO_INCREMENT) para generar valores únicos.
"AnioAcademico": Esta columna almacenará el año académico como un número entero (por ejemplo, 2023, 2024, etc.).
"Semestre": Esta columna será de tipo ENUM, lo que permite seleccionar uno de los valores predefinidos, que en este caso son 'Otoño', 'Verano' y 'Primavera' para representar los diferentes semestres académicos.
*/

CREATE TABLE PeriodoAcademico (
    PeriodoID INT AUTO_INCREMENT PRIMARY KEY,
    AnioAcademico INT,
    Semestre ENUM('Otoño', 'Verano', 'Primavera')
);

/*
En esta tabla "Guía de Profesor" (GEP), hemos definido las siguientes columnas:

"GuiaID": Esta columna será la clave primaria y se configurará como un campo numérico que se incrementará automáticamente para generar valores únicos.
"PeriodoID": Esta columna será una clave foránea que hace referencia a la columna "PeriodoID" de la tabla "PeriodoAcademico". Esto establece la relación entre la guía y el período académico al que pertenece.
"Tipo_de_Profesor": Esta columna almacenará el tipo de profesor, que es un campo ENUM con valores 'ATC' o 'PSPD', y se marca como NOT NULL para garantizar que siempre se proporcione un valor.
"GrupoID": Esta columna será una clave foránea que hace referencia a la columna "GrupoID" de la tabla "GrupoAcademico". Esto establece la relación entre la guía y el grupo académico asociado.
"Fecha_de_creación": Esta columna será de tipo TIMESTAMP y se configurará con un valor predeterminado que es la fecha y hora actual (CURRENT_TIMESTAMP) para registrar automáticamente la fecha de creación de la guía cuando se inserta un nuevo registro.

Guía de Profesor (GEP):
GuiaID (Clave primaria)
PeriodoID (Clave foránea)
Tipo de Profesor (ATC o PSPD)
GrupoID (Clave foránea)
Fecha de creación */

CREATE TABLE GuiaDeProfesor (
    GuiaID INT PRIMARY KEY IDENTITY,
    PeriodoID INT,
    Tipo_de_Profesor ENUM ('ATC', 'PSPD') NOT NULL,
    GrupoID INT,
    Fecha_de_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (PeriodoID) REFERENCES PeriodoAcademico(PeriodoID),
    FOREIGN KEY (GrupoID) REFERENCES GrupoAcademico(GrupoID)
);


--------------------------

/*Según el código proporcionado, aquí tienes al menos 10 consultas SQL relacionadas con las tablas "Profesor," "GrupoAcademico," "ProfesorGrupoAcademico," "PeriodoAcademico," y "Guía de Profesor (GEP)."
*/

1. Insertar un nuevo profesor en la tabla "Profesor":
```sql
INSERT INTO Profesor (Nombre, Apellido, No_de_Cuenta, Tipo_de_Profesor, Email, Correo_electronico_institucional, Materias_impartidas)
VALUES ('Juan', 'Pérez', '12345', 'ATC', 'juan@email.com', 'juan@institucion.com', 'Matemáticas, Física');
```

2. Actualizar el correo electrónico de un profesor en la tabla "Profesor":
```sql
UPDATE Profesor
SET Email = 'nuevo_email@email.com'
WHERE ProfesorID = 1;
```

3. Insertar un nuevo grupo académico en la tabla "GrupoAcademico":
```sql
INSERT INTO GrupoAcademico (NombreGrupo)
VALUES ('Grupos de programación');
```

4. Asignar un profesor a un grupo académico en la tabla "ProfesorGrupoAcademico":
```sql
INSERT INTO ProfesorGrupoAcademico (ProfesorID, GrupoID)
VALUES (1, 1); -- Asignar el Profesor con ID 1 al Grupo con ID 1.
```

5. Insertar un nuevo período académico en la tabla "PeriodoAcademico":
```sql
INSERT INTO PeriodoAcademico (AnioAcademico, Semestre)
VALUES (2023, 'Otoño');
```

6. Insertar una nueva guía de profesor en la tabla "GuiaDeProfesor":
```sql
INSERT INTO GuiaDeProfesor (PeriodoID, Tipo_de_Profesor, GrupoID)
VALUES (1, 'PSPD', 1);
```

7. Obtener todos los profesores del tipo "ATC":
```sql
SELECT * FROM Profesor WHERE Tipo_de_Profesor = 'ATC';
```

8. Obtener la información de un grupo académico en particular por nombre:
```sql
SELECT * FROM GrupoAcademico WHERE NombreGrupo = 'Grupos de programación';
```

9. Obtener la lista de profesores asignados a un grupo académico específico:
```sql
SELECT P.*
FROM Profesor P
INNER JOIN ProfesorGrupoAcademico PGA ON P.ProfesorID = PGA.ProfesorID
WHERE PGA.GrupoID = 1; -- Cambia el ID del grupo según tus necesidades.
```

10. Obtener todas las guías de profesor de un período académico particular:
```sql
SELECT * FROM GuiaDeProfesor WHERE PeriodoID = 1; -- Cambia el ID del período académico según tus necesidades.
```

