
<?php
// Compruebo el inicio de secion esto es necesario para distribuir los permisos y el menu navbar
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../php/login.php';</script>";
}
?> 
<?php 
 include_once('../php/fc.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Asitencia</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estylo.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>

</head>
<body>


<?php include "../php/navbar.php"  ?>


<section>


        <h1 class="text-info text-center"> Asistencia</h1>


<div class="container">
            <div class="row ">

                        <div class="col">

                            <img class="img-circle" src="../img/muscle.png" alt="" width="400" height="400">

                        </div>


                        <div class="col">

                            <form role="form" action="" name="search_form" id="search_form" method="POST">

                                    <div class="form-row aling-item-center  ">
                                        <div class="col-auto">

                                            <label class="sr-only" for="rut">Rut</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Rut">
                                        
                                        </div>

                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido"> 

                                    </div>

                                
                                </form>

                                	<div name="resultados" id="resultados" class="resp"></div>

                        </div>
            </div>

</div>
</section>





    
</body>
</html>