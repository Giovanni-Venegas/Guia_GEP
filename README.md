# Guia_GEP
This project is focused on the subject of Technology Applications and the objective is to develop comprehensive software that allows the optimization of processes with the GEP Guides of the professors of the Universidad Iberoamericana of the Department of Electronic Engineering

How to use this system:
---------------------------------------------------------
Requirements:
---------------------------------------------------------
> Have installed the most recent version of the XAMMP database management system (Free Software) --> GNU General Public License version 2.0 (GPLv2) 
Software version --> 8.0.28 / PHP 8.0.28

>Once installed, download or clone this repository (Guia_GEP), the complete folder must be in the XAMPP docs files, usually this is the common path: C:\xampp\htdocs

>The next step is to go to the browser of your choice and go to the following link: http://localhost/login-register/

>As it is a locally created environment we do not have the databases created in our localhost, so we will go to the following link: http://localhost/phpmyadmin/

Here we are going to create a new database or import it from maria db, but the name of this one must be: login_register_db_gep
The table must have the name: 'usuario'.

The following fields are created: 

id --> With autoincrement
Apellido_paterno
Apellido_materno
Nombre
No_de_cuenta
Tipo_de_profesor
email_institucional
usuario
contrasena

Once the process is completed, reload the --> http://localhost/login-register/ website.

From this moment on you will be able to have a connection between client and server to register and log in. 

