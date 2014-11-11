<?php 
	
	
	// require('class/Caso.php');
	require('class/Clientes.php');
	

	
	$db=Db::getInstance();
	// $usuarios = Agenda::getAllAgenda($db);	

	// 	$indice=0;
		$query= "SELECT Materia.Nombre,Estado,Costo,FechaInicio,Cliente.Nombre,Cliente.ApP, Cliente.ApM FROM Caso,Cliente,Materia WHERE Caso.ClienteidCliente = Cliente.idCliente AND caso.idCaso='7' AND Caso.AsuntoidAsunto = Materia.idAsunto";
		$resul=$db->ejecutar($query);

		$row=$db->obtener_fila($resul,0);
	// 	{
	// 		$cliente[$indice]=$row['Nombre']." ".$row['ApP']." ".$row['ApM'];
	// 		$indice++;
	// 	}

	// 	$query= "SELECT Nombre,ApP,ApM FROM Agenda,Abogado WHERE Agenda.AbogadoidAbogado = Abogado.idAbogado order by Agenda.idAgenda";
	// 	$resul=$db->ejecutar($query);
	// 	$indice=0;
	// 	while($row=$db->obtener_fila($resul,0))
	// 	{
	// 		$abogado[$indice]=$row['Nombre']." ".$row['ApP']." ".$row['ApM'];;
	// 		$costo[$indice]=$row['Costo'];
	// 		$estado[$indice]=$row['Estado'];
	// 		$indice++;
	// 	}

?>
	<div class="main-container">
		<div class="row">
			<div class="small-6 small-centered large-6 large-centered columns">
				<h2>Información del caso</h2>
			</div>
		</div>
		
			<div class="row">
				<div class="large-6 large-centered columns">
					<label>Estado</label>
					<input type="text" value="<?=$row['Estado']?>"  disabled>
				</div>
			</div>
			<div class="row">
				<div class="large-6 large-centered columns">
					<label>Detalles</label>
					<input type="text"value="<?=$row['Costo']?>"  disabled>
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
					<label>Fecha de inicio</label>
					<input type="text" value="<?=$row['FechaInicio']?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="large-6 large-centered columns">
					<label for="">Abogado del caso</label>
					<input type="text" value="<?=$row['Nombre']?>" disabled>
				</div>
			</div>
	</div>
	<?php require('FCliente.php');?>

</body>
</html>