<?php
$enlace = mysqli_connect('localhost', 'root', 'mysql2017', 'usuarios', 3306);

$cadena="INSERT INTO `usuarios`.`usuario`
(`nombre`,
`contraseña`)
VALUES
('"$_REQUEST['usuario']"','"$_REQUEST['contrasena']"');";

mysqli_query($enlace, $cadena);

 echo $cadena;