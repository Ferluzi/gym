      <!-- MENU NABVAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
          <a class="navbar-brand" href="#">
            <img src="../img/Muscle.png" width="60" height="50" alt=""> Bienvenido <?php echo $_SESSION['name']; ?>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">
            <?php if(!isset($_SESSION["user_id"])):?>
              <!--si no estoy logeado me manda a registrarme o a ingresar-->
              <li>
                  <a class="nav-link" href="../php/login.php">Ingresar</a>
              </li>
              <?php else:?>
              <!-- si estoy registrado muesta los siguientes links -->
              <li class="nav-item ">
                  <a class="nav-link text-info" href="home.php">inicio</a>
              </li>
              <li class="nav-item active">  
                  <a class="nav-link text-info" href="../adm/crearusuario.php">Crear Usuarios</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link text-info" href="../adm/asistencia.php">Control de asistencia</a>
              </li>

              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi Perfil</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">My Perfil</a>
                    <a class="dropdown-item" href="#">Chat</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../php/logout.php"> Cerrar Cesion</a>
                  </div>
              </li>
              <?php endif;?>
            </ul>
          </div>
        </nav>
