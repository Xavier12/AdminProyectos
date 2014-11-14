	<?php 
		require('HSecre.php');
		// require('Secretaria.php');
		$db=Db::getInstance();

		$query="SELECT idAbogado,Nombre,ApP,ApM FROM Abogado";
		$indice=0;
		$var=$db->ejecutar($query);

		while ($row=$db->obtener_fila($var,0)) 
		{
			
			$arrAbo[$indice] = $row['Nombre']." ".$row['ApP']." ".$row['ApM'];
			$idAbogado[$indice] = $row['idAbogado'];
			$indice=$indice+1;
		}

		$query="SELECT idCliente,Nombre,ApP,ApM FROM Cliente";
		$indice=0;
		$var=$db->ejecutar($query);

		while ($row=$db->obtener_fila($var,0)) 
		{
			$arrC[$indice] = $row['Nombre']." ".$row['ApP']." ".$row['ApM'];
			$idCliente[$indice] = $row['idCliente'];
			$indice=$indice+1;
		}


		for ($i = 0; $i < count($arrAbo); $i++) {$all_address[] =  $arrAbo[$i];}

		for ($i = 0; $i < count($arrC); $i++){ $all_Client[] =  $arrC[$i];}

	?>
	
	<div id="main-content">
		<div class="row">
			<div class="small-12 small-centered medium-5 medium-centered large-6 large-centered columns">
				<h2>Agregar nueva agenda</h2>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-12 small-centered large-centered columns">
				<form method="POST" action="index.php?pag=diary">
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Actividad</label>
							<input type="text" name="txtAct" placeholder="Actividades a realizar">
						</div>
					</div>
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Lugar</label>
							<input type="text" name="txtLugar" placeholder="Lugar de la cita">
						</div>
					</div>
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Dirección</label>
							<input type="text" name="txtDir" placeholder="Dirección del lugar">
						</div>
					</div>
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Hora</label>
							<input type="text"  name="txtHr" placeholder="Horario">
						</div>
					</div>
					
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Abogado</label>
							<select name="abogado">
								<?php $x=0;?>
								<?php foreach ($all_address as $aa):?>
          						<option value="<?=$idAbogado[$x]?>"><?= ($aa)?></option>
          					
          						<?php $x++; ?>
          						<?php endforeach ?>
        					</select>
						</div>
					</div>

					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Cliente</label>
							<select name="cliente">
								<?php $j=0;?>
								<?php foreach ($all_Client as $client):?>
								<?php echo $client?>
          						<option value="<?=$idCliente[$j]?>"><?=($client)?></option>
								
								<?php $j++; ?>
          						<?php endforeach ?>
        					</select>
						</div>
					</div>

					<div class="row">
					<div class="large-3 large-centered columns">
						
						<input  type="submit" value="Aceptar">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
		<?php require('FSecre.php');?>