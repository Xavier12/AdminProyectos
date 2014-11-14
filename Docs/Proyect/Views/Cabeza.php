<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <!-- http://www.riosabogados.com/ -->
  <!-- http://www.guerragonzalez-abogados.com/ -->
  <!-- http://www.natividad-abogados.com.mx/ -->
  <!-- http://www.incamex.org.mx/abogados-en-estado-veracruz_0.html -->
  <!-- http://www.frasc.com.mx/ -->
  <meta charset="UTF-8">
  <title>Despacho</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/marketing.css">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/Carrusel3.js"></script>
    <script type="text/javascript" src="js/FullWidth.js"></script>
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script src="js/vendor/modernizr.js"></script>

</head>
<body>
<?php require("Carrusel.php");?>
<div data-magellan-expedition="fixed"  class="magellan-container">
      <ul class="sub-nav" id="B-formulario">
        <li data-magellan-arrival="somos"><a href="#somos">¿Quienes somos?</a></li>
        <li data-magellan-arrival="clientes"><a href="#clientes">Clientes</a></li>
        <li data-magellan-arrival="servicios"><a href="#servicios">Servicio</a></li>
        <li data-magellan-arrival="numeros"><a href="#numeros">Nuestros números</a></li>
        <li data-magellan-arrival="info"><a href="#info">Redes-Localización</a></li>
        <!-- <li class=" small-2 large-2 medium-2 columns">
          <input type="text" placeholder="Email" />
        </li>
        <li class="small-2 large-2 medium-2 columns">
          <input type="password" placeholder="password" />
        </li> -->
      <div class="top-bar-section">
        <form method="POST" id="formulario" class="right" action="." data-abide>
            <div>
                  <input type="submit" name="btLog" value="Login" class="right"> 
                 <!-- <li><a href="index.php" name="btLog" class="alert button expand">Cerrar Sesion</a></li> -->
                <div class="right">
                  <input name="txtPass" type="password" placeholder="Password" required>
                  <small class="error">Se requiere la contraseña</small>
                </div>
                <div class="name-field right">
                  <input name="txtUser" type="alpha_numeric" placeholder="Usuario" required>
                  <small class="error">Se requiere el usuario</small>
                </div>
            </div>
        </form>
      </div>
      </ul>
    </div>
<hr style="width:100%; margin:0px; margin-top:1px;border:1px solid #484543">