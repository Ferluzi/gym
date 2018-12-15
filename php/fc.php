
<?php

//parametros de configuracion dpara la conexion  a la bese de datos
$host="localhost";//es el equivalente al valor de nuestra base de datos 
$user="root";//es el equivalente al valor de nuestra base de datos 
$password="";//es el equivalente al valor de nuestra base de datos 
$db="gym";//es el equivalente al valor de nuestra base de datos 

//NOTA: al referirme a equivalentes me refiero a los datos que son proporsionados por la base de datos 
//cave destacar que el un hosting estos datos seran diferentes.

//listado de tablas:
$tabla_us = "user";
// NOTA es mejor identificar las tablas con una variable para poder utilizarla
// ya que si en algun moento el nombre de la tabla es cambiado podemos cambiar solo el valor aca y no es necesario 
//que lo cambiemos en cada consultaque hagamos.


$con = mysqli_connect("$host","$user","$password","$db");

if  (mysqli_connect_error()){
    echo 'Error, no se pudo conectar con la bese de datos: ' .mysqli_connect_error();
    exit();
}



?>