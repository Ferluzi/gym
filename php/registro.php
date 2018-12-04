<?php

if(!empty($_POST)){
	if(isset($_POST["rut"])  &&isset($_POST["name"]) &&isset($_POST["surname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["rut"]!=""&& $_POST["name"]!=""&& $_POST["surname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "fc.php";
			
			$found=false;
			$sql1= "select * from user where name=\"$_POST[name]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into user(rut,name,surname,email,password,created_at) value (\"$_POST[rut]\",\"$_POST[name]\",\"$_POST[surname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../adm/crearusuario.php';</script>";
			}
		}
	}
}



?>