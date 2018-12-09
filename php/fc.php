
<?php


$host="localhost";
$user="root";
$password="";
$db="gym";


$con = mysqli_connect("$host","$user","$password","$db");

if  (mysqli_connect_error()){
    echo 'Error, no se pudo conectar con la bese de datos: ' .mysqli_connect_error();
}

?>