<!doctype html>
<html lang="es">
  <head>
    <title>Estacionamiento</title>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../Paginas/Registro.php">Registrarse</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../Paginas/Login.php">Login</a>
            </li>
            <?php 
                if (isset($_SESSION['usuario'])==1):

             ?>
            <li class="nav-item active">
              <a class="nav-link" href="../Paginas/IngresoVehiculo.php">Ingreso</a>
            </li>            
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../Paginas/Facturar.php">Egreso</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../Funciones/LeerVehiculos.php">Vehiculos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../Funciones/HacerLogout.php">Log-Out</a>
            </li> 
            <li class="nav-item active">
              <a class="nav-link"> Usuario:<?php print_r($_SESSION['usuario']) ; ?></a>
            </li>
            <?php endif;  ?>
            <?php 
                if ((isset($_SESSION['usuario'])==1) && ($_SESSION['admin'] == 1)):
            ?>
             <li class="nav-item active">
              <a class="nav-link" href="../Funciones/LeerFacturados.php">Facturados</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../Funciones/LeerUsuarios.php">Usuarios</a>
            </li>
            
            <?php endif;  ?>
            <li class="nav-item active">
              <a class="nav-link" href="../Paginas/Precios.php">Mas Informacion</a>
            </li>            
          
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </header>
  </head>
<body>  
    <main role="main" class="container">
      <h1 class="mt-5">BIENVENIDOS AL ESTACIONAMIENTO "LA BLANQUEADA"</h1>
      <center>
        <img src="https://www.logisticatops.com/wp-content/uploads/sites/7/2019/02/Estacionamiento-para-vehiculos.jpg" width="800"
         height="400" align="middle">
      </center>
    </main>

  </body>
</html>
