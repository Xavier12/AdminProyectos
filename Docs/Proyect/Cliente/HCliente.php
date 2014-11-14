<?php 
  session_start();
  require('class/db.class.php');
  require('class/conf.class.php'); 

  
  $db=Db::getInstance();
  
  $id=$_SESSION['var'];

  $query= "SELECT Nombre,ApP,ApM FROM Cliente WHERE idAbogado ='{$id}'";
  $resul=$db->ejecutar($query);

  $row=$db->obtener_fila($resul,0);
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
	<div class="top-bar" data-topbar>
  		<ul class="title-area">
    		<li class="name">
      			<h1 ><a id="cliente">Cliente</a></h1>
    		</li>
			 <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  		</ul>

    		<section class="top-bar-section">
    			<ul class="right">
            <li><a href="Abogado.php">Mi caso</a></li>
            <li><a href="index.php?pag=cerrar" class="alert button expand">Cerrar Sesion</a></li>

    			</ul>
    		</section>
	 </div>
</div>
<hr style="border:1px solid #FFFFFF">
