<?php 
	
	require('class/Abogado.php');
	require('class/Agenda.php');
	require('class/Clientes.php');
	// require('class/Secretaria.php');

	require('HSecre.php');
	$db=Db::getInstance();
	$usuarios = Agenda::getAllAgenda($db);	

		$indice=0;
		$query= "SELECT * FROM Agenda,Cliente WHERE Agenda.ClienteidCliente = Cliente.idCliente";
		$resul=$db->ejecutar($query);

		while($row=$db->obtener_fila($resul,0))
		{
			$cliente[$indice]=$row['Nombre']." ".$row['ApP']." ".$row['ApM'];
			$indice++;
		}

		$query= "SELECT Nombre,ApP,ApM FROM Agenda,Abogado WHERE Agenda.AbogadoidAbogado = Abogado.idAbogado order by Agenda.idAgenda";
		$resul=$db->ejecutar($query);
		$indice=0;
		while($row=$db->obtener_fila($resul,0))
		{
			$abogado[$indice]=$row['Nombre']." ".$row['ApP']." ".$row['ApM'];;
			$indice++;
		}

?>
<div id="main-content">
	<div class="row ">
		<div class="small-12 small-centered medium-4 medium-centered large-4 large-centered  columns">
			<h2>Datos de Agenda</h2>
		</div>
	</div>

	<div class="row">
		<div class="small-12 small-centered medium-6 medium-2centered large-6 large-centered columns">
		<table role="grid">
			<thead>
				<th scope="column">Cliente</th>
				<!-- <th scope="column">Secretaria</th> -->
				<th scope="column">Abogado</th>
				<th scope="column">Actividad</th>
				<th scope="column">Lugar</th>
				<th scope="column">Direccion</th>
				<th scope="column">Horario</th>
				<th scope="column">Acciones</th>
			</thead>
			<tbody>
				<?php $x=0; ?>
				<?php foreach ($usuarios as $usuario):?>
				<tr>
					<td scope="row">
						<?=$cliente[$x];?>    
					</td>
					<td scope="row">
						<?=$abogado[$x];?> 
					</td>
					<td scope="row">
						<?= ($usuario->getActividad()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getLugar()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getDireccion()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getHr()) ?> 
					</td>
					<td scope="row">
						<a onclick = "if (!confirm('¿Desea borrar el usuario?')) return false;" href="index.php?pag=de&iduser=<?=$usuario->getId();?>">
                        	<img src="Res/del.png">
                        </a>
					</td>
					<?php $x++;?>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
	<?php require('FSecre.php');?>