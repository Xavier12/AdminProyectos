<?php 
	session_start();
	
	require('class/Clientes.php');
	require('class/Abogado.php');
	
	$db=Db::getInstance();
	
	$id=$_SESSION['var'];
	//SELECT Abogado.Nombre,Abogado.ApP, Cliente.Nombre, Cliente.ApP, Cliente.ApM, Caso.Estado,Caso.Detalle,Caso.FechaInicio, Caso.FechaTerm,Caso.Estado FROM Caso,Cliente,Abogado WHERE Cliente.idCliente= Caso.ClienteidCliente AND Cliente.nombre="Oscar" AND Caso.AbogadoidAbogado=Abogado.idAbogado
	// SELECT Cliente.Nombre, Cliente.ApP, Cliente.ApM FROM Caso,Cliente WHERE Cliente.idCliente= Caso.ClienteidCliente AND Cliente.nombre="Leo"
	$query= "SELECT Abogado.Nombre,Abogado.ApP, Abogado.ApM,Abogado.ApP,Caso.Costo, Caso.Estado,Caso.Detalle,Caso.FechaInicio, Caso.FechaTerm,Caso.Estado FROM Caso,Cliente,Abogado WHERE Cliente.idCliente= Caso.ClienteidCliente AND Cliente.idCliente='{$id}' AND Caso.AbogadoidAbogado=Abogado.idAbogado";
	$resul=$db->ejecutar($query);
	$row=$db->obtener_fila($resul,0);

	switch ($row['Estado']) {
		case 'P':
			$var = "Proceso";
			break;
		
		case 'T':
			$var = "Terminado";
			break;

		default:
			# code...
			break;
	}

	$query= "SELECT Usuario FROM Cliente WHERE idCliente ='{$id}'";
 	$result=$db->ejecutar($query);
 	$rowN=$db->obtener_fila($result,0);
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cliente</title>
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
      			<h1 ><a id="cliente"><?=$rowN['Usuario']?></a></h1>
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

	<div class="main-container">
		<div class="row">
			<div class="small-6 small-centered large-6 large-centered columns">
				<h2>Información de mi caso</h2>
			</div>
		</div>
		
			<div class="row">
				<div class="large-6 large-centered columns">
					<label>Estado</label>
					<input type="text" value="<?=$var?>"  disabled>
				</div>
			</div>
			<div class="row">
				<div class="large-6 large-centered columns">
					<label>Detalles</label>
					<input type="text"value="<?=$row['Detalle']?>"  disabled>
				</div>
			</div>
			<div class="row">
				<div class="large-6 large-centered columns">
					<label>Costo</label>
					<input type="text" value="<?=$row['Costo']?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="large-6 large-centered columns">
					<label>Fecha de inicio del caso</label>
					<input type="text" value="<?=$row['FechaInicio']?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="large-6 large-centered columns">
					<label>Fecha en que termino el caso</label>
					<input type="text" value="<?=$row['FechaTerm']?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="large-6 large-centered columns">
					<label for="">Abogado del caso</label>
					<input type="text" value="<?=$row['Nombre']." ".$row['ApP']." ".$row['ApM']?>" disabled>
				</div>
			</div>
	</div>
	<?php require('FCliente.php');?>

</body>
</html>