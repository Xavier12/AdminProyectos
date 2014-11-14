<?php 
	
	// require('class/Abogado.php');
	require('class/Materia.php');
	// require('class/Agenda.php');
	// require('class/Secretaria.php');

	require('HSecre.php');
	$db=Db::getInstance();
	$usuarios = Materia::getAllMaterias($db);	
?>
<div id="main-content">
	<div class="row ">
		<div class="small-12 small-centered medium-4 medium-centered large-4 large-centered  columns">
			<h2>Datos de clientes</h2>
		</div>
	</div>

	<div class="row">
		<div class="small-12 small-centered medium-2 medium-centered large-2 large-centered columns">
		<table role="grid">
			<thead>
				<th scope="column">Tipo</th>
				<th scope="column">Acciones</th>
			</thead>
			<tbody>
				<?php foreach ($usuarios as $usuario):?>
				<tr>
					<td scope="row">
						<?= ($usuario->getTipo()) ?>    
					</td>
					<td scope="row">
						<a onclick = "if (!confirm('¿Desea borrar el usuario?')) return false;" href="index.php?pag=dMa&iduser=<?=$usuario->getId();?>">
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