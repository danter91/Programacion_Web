<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arte y Cultura: Palo  Palito | Acceso Empleados :: Prueba</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header_bg">
<div class="wrap">
  <div id="content">
      <header id="topnav">
        <nav>
             <ul>
              <li><a href="../index.php">Volver a Página Institucional</a></li>
              <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Iniciar sesión</a></li>
              <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-registrar">Registrarse</a></li>
            </ul>
        </nav>
         <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Image 1"></a></div>
        <a href="#" id="navbtn">Nav Menu</a>
        <div class="clear"> </div>
      </header><!-- @Fin #topnav -->
      <script src="js/menu.js"></script>
    </div>
</div>
</div>

      <!--modal para iniciar sesión-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Iniciar sesión</h2>
        </div>
        <div class="modal-body">
          <form action="archivo_destino.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control1_nombre">Usuario</label>
              <input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="control1_contraseña">Contraseña</label>
              <input type="password" name="datos_introducidos_contraseña" class="form-control" id="control1_contraseña" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Entrar</button>
          </form>
        </div>
    </div>
  </div>
</div>
      <!--modal para registrarse-->
<div class="modal fade bs-example-modal-sm-registrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="archivo_registrar.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control2_nombre">Usuario</label>
              <input type="text" name="datos_registrar_usuario" class="form-control" id="control2_nombre" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <label for="control2_contraseña">Contraseña</label>
              <input type="password" name="datos_registrar_contraseña" class="form-control" id="control2_contraseña" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Registrar</button>
          </form>
        </div>
    </div>
  </div>
</div>

<!-- @inicioslider -->
<div class="slider" id="inicio"> 
        <div class="wrap">
        <div id="da-slider" class="da-slider">
        <div class="da-slide">
          <h2>Artesanía hecha con el corazón</h2>
          <p>Es el resultado de la historia: Dedicación, paciencia, entrega y amor.</p>
          <a href="#" class="da-link">Leer más...</a>
        </div>
      <link rel="stylesheet" type="text/css" href="css/slider.css" />
 
        <!-- @finslider -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>