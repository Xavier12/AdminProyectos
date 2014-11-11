<?php 
	require ('HSecre.php');
	require('class/Clientes.php');
	$usuarios = Cliente::getAllClientes($db);		
?>

<div id="main-content">
	<div class="row ">
		<div class="small-12 small-centered medium-4 medium-centered large-4 large-centered  columns">
			<h2>Datos de clientes</h2>
		</div>
	</div>

	<div class="row">
		<div class="small-12 small-centered medium-6 medium-2centered large-6 large-centered columns">
		<table role="grid">
			<thead>
				<th scope="column">Nombre</th>
				<th scope="column">Apellido Paterno</th>
				<th scope="column">Apellido Materno</th>
				<th scope="column">Sexo</th>
				<th scope="column">Domicilio</th>
				<th scope="column">Usuario</th>
			</thead>
			<tbody>
				<?php foreach ($usuarios as $usuario):?>
				<tr>
					<td scope="row">
						<?= ($usuario->getNombre()) ?>    
					</td>
					<td scope="row">
						<?= ($usuario->getApP()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getApM()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getSexo()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getDomicilio()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getUser()) ?> 
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
	<?php require('FSecre.php');?>