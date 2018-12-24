
<?php
// Compruebo el inicio de secion esto es necesario para distribuir los permisos y el menu navbar
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../php/login.php';</script>";
}

?>
<?php
 include_once('../php/fc.php');

 $opciones=null;
 $sql1= "select * from user";
 $query = $con->query($sql1);
 while ($r=$query->fetch_array()) {
		$opciones .= '"' . $r['rut'] . '",';
 }
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
    <script type="text/javascript" src="../js/ajax.js"></script>

    
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		<script>
		$( function() {

		// Variable que recoge el resultado de la consulta sobre la tabla Provincias, Jquery trabajará sobre este resultado para dinamizar el funcionamiento.
		var availableTags = [<?php echo $opciones ?>];
		$( "#search" ).autocomplete({
		source: availableTags
		});
		} );
		</script>
</head>
<body>


<?php include "../php/navbar.php"  ?>


<section>
        
    <h1 class="text-info text-center"> Asistencia</h1>

    <div class="container">
            <div class="row">
                        <div class="col">
                            <img class="img-circle" src="../img/muscle.png" alt="" width="400" height="400">
                        </div>

                        <div class="col">
                           <form class="form-inline" role="form" action="" name="search_form" id="search_form" method="POST">
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="rut">Rut</label>
                                            <input type="text" class="form-control mb-2" name="search" id="search" value="" placeholder="Buscar...">
                                        </div>
                                    </div>
                            </form>

                            <div name="resultados" id="resultados" class="resp">
                            
                            </div>
                        </div>
            </div>
    </div>
</section>

</body>
</html>
