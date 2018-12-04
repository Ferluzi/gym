<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estylo.css">
    <script src="../js/jquery.js"></script>

</head>
<body>
  


      <!-- MENU NABVAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
          <a class="navbar-brand" href="#">
            <img src="../img/Muscle.png" width="60" height="50" alt=""> Ingreso a panel Administrativo
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"></a>
              </li>
            </ul>
          </div>
        </nav>


<!--formulario de inisio de session en bootstrap el cual es enviado por POST desde HTML a PHP Loguin.php-->
<section>

  <h1 class="text-center text-success"> Ingreso</h1>


<div class="container">  

  <div class="jumbotron">

      <div class="col-lg-4 offset-4 text-center">

                    <form role="form" name="login" action="../php/login.php" method="post">

                        <div class="form-group">
                          <label for="exampleInputEmail1">Usueario</label>
                          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Usuario o Correo" required>
                          <small id="emailHelp" class="form-text text-muted">Ingrese Usuario o Correo</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Contraseña</label>
                          <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>

                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Recordarme </label>
                        </div>


                        <hr>
                        <button type="submit" class="btn btn-success">Acceder</button>

                    </form>
      </div>
    <!--TERMINO DE JUMBOTRON  -->
    <!--Barra de progreso bootstrap-->
    <!--falta aprender a complementar con JS -->
    <br>
    <div class="col-lg-12">

        <div class="container">

            <div class="progress">

                <div id="bar" class="progress-bar bg-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    <span class="sr-only">0% Complete</span>
                </div>
                
            </div>

        </div>
        <!--Script de barra de progreso bootstrap-->
       <script>
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

</div>

</section>





    <!--para que funcionen los dopdowms hay que adjuntar el js de bootstrap al fin del body-->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>

</body>
</html>