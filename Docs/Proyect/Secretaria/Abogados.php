<?php 
	// require('class/Abogado.php');
	require('class/Abogado.php');
	// require('class/Agenda.php');
	// require('class/Secretaria.php');

	require('HSecre.php');
	$db=Db::getInstance();
	$usuarios = Abogado::getAllAbogados($db);		
?>

<div id="main-content">
	<div class="row ">
		<div class="small-12 small-centered medium-5 medium-centered large-5 large-centered  columns">
			<h2>Datos de abogados</h2>
		</div>
	</div>

	<div class="row">
		<div class="small-12 small-centered medium-10 medium-2centered large-10 large-centered columns">
		<table role="grid">
			<thead>
				<th scope="column">Nombre</th>
				<th scope="column">Apellido Paterno</th>
				<th scope="column">Apellido Materno</th>
				<th scope="column">Tipo</th>
				<th scope="column">Domicilio</th>
				<th scope="column">Sexo</th>
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
						<?= ($usuario->getTipo()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getDomicilio()) ?>
					</td>
					<td scope="row">
						<?= ($usuario->getSexo()) ?> 
					</td>
					<td scope="row">
						<?= ($usuario->getUser()) ?> 
					</td>
					<td scope="row">
                        <a onclick = "if (!confirm('¿Desea borrar el usuario?')) return false;" href="index.php?pag=del&iduser=<?=$usuario->getId();?>">
                        	<img src="Res/del.png">
                        </a>
                        <a href="index.php?pag=mod&iden=<?=$usuario->getID();?> ">
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