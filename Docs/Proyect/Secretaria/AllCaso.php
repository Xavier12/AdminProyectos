<?php 
	
	require('class/Clientes.php');
	require('class/Caso.php');
	// require('class/Agenda.php');
	// require('class/Secretaria.php');

	require('HSecre.php');
	$db=Db::getInstance();
	$indice=0;
	$usuarios = Caso::getAllCasos($db);	

	
		$query= "SELECT * FROM Caso,Cliente WHERE Caso.ClienteidCliente = Cliente.idCliente";
		$resul=$db->ejecutar($query);
		

		while($row=$db->obtener_fila($resul,0))
		{
			$nombre[$indice]=$row['Nombre']." ".$row['ApP']." ".$row['ApM'];
			$indice++;
		}

		$query= "SELECT Tipo,Estado,Costo,FechaInicio FROM Caso,Materia WHERE Caso.MateriaidMateria = Materia.idMateria order by Caso.idCaso";
		$resul=$db->ejecutar($query);

		$indice=0;
		while($row=$db->obtener_fila($resul,0))
		{
			$estado[$indice]=$row['Estado'];
			$materia[$indice]=$row['Tipo'];
			$indice++;
		}	
?>
<div id="main-content">
	<div class="row ">
		<div class="small-12 small-centered medium-4 medium-centered large-4 large-centered  columns">
			<h2>Datos de casos</h2>
		</div>
	</div>

	<div class="row">
		<div class="small-12 small-centered medium-6 medium-2centered large-6 large-centered columns">
		<table role="grid">
			<thead>
				<th scope="column">Estado</th>
				<!-- <th scope="column">Secretaria</th> -->
				<th scope="column">Costo</th>
				<th scope="column">Fecha</th>
				<th scope="column">Asunto</th>
				<th scope="column">Cliente</th>
				
				<th scope="column">Acciones</th>
			</thead>
			<tbody>
				<?php $x=0; ?>
				<?php foreach ($usuarios as $usuario):?>
				<?php $var=$usuario->getCliente(); ?>
				<tr>
					<td scope="row">
						<?= ($usuario->getEstado()) ?>    
					</td>
					<td scope="row">
						<?= ($usuario->getCosto()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getFecha()) ?> 
					</td>
					<td scope="row">
						<?= $materia[$x];?> 
					</td>
					<td scope="row">
						<?= $nombre[$x]; ?> 
					</td>
					<?php $x++;?>
					
					<td scope="row">
						<a onclick = "if (!confirm('¿Desea borrar el usuario?')) return false;" href="index.php?pag=d&iduser=<?=$usuario->getId();?>">
                        	<img src="Res/del.png">
                        </a>
                        <a href="index.php?pag=mod&id=<?=$usuario->getID();?> ">
                        	<img src="Res/up.png">
                        </a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
	<?php require('FSecre.php');?>