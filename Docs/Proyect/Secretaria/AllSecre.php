<?php 
	
	// require('class/Abogado.php');
	require('class/Secretaria.php');
	// require('class/Agenda.php');
	// require('class/Secretaria.php');

	require('HSecre.php');
	$db=Db::getInstance();
	$usuarios = Secretaria::getAllSecretaria($db);	
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
				<th scope="column">Acciones</th>
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
					<td scope="row">
						<a onclick = "if (!confirm('¿Desea borrar el usuario?')) return false;" href="index.php?pag=dele&iduser=<?=$usuario->getId();?>">
                        	<img src="Res/del.png">
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