<?php 
  require('class/db.class.php');
  require('class/conf.class.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="UTF-8">
  <title>Secretaria</title>
  <link rel="stylesheet" type="text/css" href="../css/foundation.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script>
  <script src="../js/vendor/modernizr.js"></script>
</head>
<body>
<div class="contain-to-grid sticky">
	<div class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
  		<ul class="title-area">
    		<li class="name">
      			<h1><a id="secre">Secretaria</a></h1>
    		</li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  		</ul>

    		<section class="top-bar-section">
        <ul class="left">
            <li><a >José Xavier</a> </li>
          </ul>
    			<ul class="right">

            <li class="has-dropdown">
              <a href="">Abogados</a>
              <ul class="dropdown">
                <li><a href="Abogado.php">Agregar Abogado</a></li>
                <li><a href="Abogados.php">Mostrar Todos</a></li>
              </ul>
            </li>

            <li class="has-dropdown">
              <a href="">Agenda</a>
              <ul class="dropdown">
                <li><a href="Agenda.php">Nueva agenda</a></li>
                <li><a href="AllAgenda.php">Mostrar Todos</a></li>
                
              </ul>
            </li>


            <li class="has-dropdown">
              <a href="">Caso</a>
              <ul class="dropdown">
                <li><a href="Caso.php">Agregar Caso</a></li>
                <li><a href="AllCaso.php">Mostrar Todos</a></li>
              </ul>
            </li>

            <li class="has-dropdown">
              <a href="">Clientes</a>
              <ul class="dropdown">
                <li><a href="Client.php">Agregar Cliente</a></li>
                <li><a href="AllClientes.php">Mostrar Todos</a></li>
              </ul>
            </li>

            <li class="has-dropdown">
              <a href="">Secretaria</a>
              <ul class="dropdown">
                <li><a href="Secretaria.php">Agregar Secretaria</a></li>
                <li><a href="AllSecre.php">Mostrar Todos</a></li>
              </ul>
            </li>



    			</ul>
    		</section>
	 </div>
</div>
<hr>