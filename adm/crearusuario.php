
<?php
// Compruebo el inicio de secion esto es necesario para distribuir los permisos y el menu navbar
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../php/login.php';</script>";
}
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admicion</title>
    <?php
        include "../php/links.php";
    ?>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estylo.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script> 
</head>
<body>
    <!-- MENU NABVAR -->
<?php include "../php/navbar.php" ?>


    
<!--formulario de inisio de session en bootstrap el cual es enviado por POST desde HTML a PHP Loguin.php-->
<section>

    <h1 class="text-info text-center">Admisión</h1>

    <div class="container"> 

        <div class="jumbotron"> 

            <div class="col-lg-6 offset-3"><!-- formulario de admision-->

                    
                <form role="form" name="registro" action="../php/registro.php" method="post"><!--formulario-->

                <div class="row"><!-- rut -->
                        <div class="col-12">
                            <div class="form-group">
                                    <label class="badge badge-info" for="rut">Rut</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="rut" id="rut" placeholder=" Eje:  17178796" required>

                                    <div class="col-2 " >
                                        <input type="text" class="form-control" name="dv" id="dv" placeholder="-3" > 
                                        </div>
                                    </div>
                            </div>
                        </div>   

                </div>

                <div class="row"><!-- nombre y apellido-->        
                        
                        <div class="col">
                            <div class="form-group">
                                    <label class="badge badge-info" for="name">Nombre Completo</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                    <label class="badge badge-info" for="surname">Apellidos</label>
                                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Apellidos" required>
                            </div>
                        </div>

                </div>  

                <div class="row"> <!-- correo electronico y telefono-->

                        <div class="col">
                            <div class="form-group">
                                    <label class="badge badge-info" for="email">Correo Electronico</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese Correo Electronico" required>
                            </div>
                        </div>

                        <div class="col">        
                            <div class="form-group">
                                    <label class="badge badge-info" for="fono">Telefono</label>
                                    <input type="tel" class="form-control" name="fono" id="fono" placeholder="Ingrese Telefono" required>
                            </div>
                        </div>
                </div> 
                    
                <div class="row">  <!-- contraseña -->

                        <div class="col">        
                            <div class="form-group">      
                                    <label for="password" class="badge badge-info"> Contraseña</label>  
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese Contraseña" required>
                            </div> 
                        </div>
                        
                        <div class="col">
                            <div class="form-group">
                                    <label for="confirm_password" class="badge badge-info"> Repita Contraseña</label>
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Repita contraseña" required>
                            </div>
                        </div>

                </div>
                
                <div class="row"><!-- seleccion de planes-->
                        <div class="col">
                            <div class="form-group">
                                    <label for="id" class="badge badge-info">Seleccione un Plan</label>
                                    <select class="form-control" id="plan" name="plan" onchange="showUser(this.value)">
                                    <option value="">Seleccione un Plan</option>
                                    <option value="4">Pase Diario</option>
                                    <option value="3">Plan 10 Dias x Mes $15.000</option>
                                    <option value="2">Plan 15 Dias x Mes $19.000</option>
                                    <option value="1">Plan Ilimitado $22.000</option>
                                    </select>
                            </div>  
                        </div>
                </div>    

                <div class="col"><!--boton guardar-->
                    <hr>
                    <button type="submit" value="registrar" class="btn btn-info btn-block"> Guardar</button>
                </div>
                        
                
            </div>   
               

                </form>

         
                <div class="container">
                <br><br>   
        
                    <div class="progress">
        
                        <div id="bar" class="progress-bar progress-bar-striped bg-info active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            <span class="sr-only">0% Complete</span>
                    </div>
                            
                            <script> /*Script de barra de progreso bootstrap*/
                                var progreso = 0;
                                var idIterval = setInterval(function(){
                                // Aumento en 10 el progeso
                                progreso +=100;//se cambian los numeros para dar el % segun lo estime necesario
                                $('#bar').css('width', progreso + '%');
                                    
                                //Si llegó a 100 elimino el interval
                                if(progreso == 100){
                                    clearInterval(idIterval);
                                }
                                },1000);
                            </script>
                </div>
        
           
        </div>
        <!--TERMINO DE JUMBOTRON  -->
            

    </div>


</section>   



    <!--para que funcionen los dopdowms hay que adjuntar el js de bootstrap al fin del body-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

</body>
</html>