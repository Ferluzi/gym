<link rel="stylesheet" href="css/sweetalert.min.css">
<script src"js/sweetalert.min.js" type="text/javascript"></script>
<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["password"])){
		if($_POST["name"]!=""&&$_POST["password"]!=""){
			include "fc.php";
			
			$user_id=null;
			$sql1= "select * from user where (name=\"$_POST[name]\" or email=\"$_POST[name]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				$name=$r["name"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../adm/index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["name"]=$name;
				print "<script>window.location='../adm/home.php';</script>";				
			}
		}
	}
}



?>