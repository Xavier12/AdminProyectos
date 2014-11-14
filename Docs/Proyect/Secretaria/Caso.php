	<?php 
		require('HSecre.php');
		// require('Secretaria.php');
		$db=Db::getInstance();


		$query="SELECT idAbogado,Nombre,ApP,ApM FROM Abogado";
		$indice=0;
		$var=$db->ejecutar($query);

		while ($row=$db->obtener_fila($var,0)) 
		{
			// $name=$row['Nombre'];
			// $app=$row['ApP'];
			$arrAbo[$indice] = $row['Nombre']." ".$row['ApP']." ".$row['ApM'];
			$arr[$indice] = $row['idAbogado'];
			$indice=$indice+1;
		}

		$query="SELECT idCliente,Nombre,ApP FROM Cliente";
		$indice=0;
		$var=$db->ejecutar($query);

		while ($row=$db->obtener_fila($var,0)) 
		{
			$nameC=$row['Nombre'];
			$appC=$row['ApP'];
			$arrC[$indice] = $nameC." ".$appC;
			$idCliente[$indice] = $row['idCliente'];
			$indice=$indice+1;
		}


		$query="SELECT idMateria,Tipo FROM Materia";
		$indice=0;
		$var=$db->ejecutar($query);

		while ($row=$db->obtener_fila($var,0)) 
		{
			$nombreMateria[$indice]=$row['Tipo'];
			$idMateria[$indice] = $row['idMateria'];
			$indice=$indice+1;
		}


		for ($i = 0; $i < count($arrAbo); $i++) {$all_address[] =  $arrAbo[$i];}

		for ($i = 0; $i < count($nombreMateria); $i++) {$all_materia[] =  $nombreMateria[$i];}


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
				<form method="POST" action="index.php?pag=caso">
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Estado</label>
							<!-- <input type="text" name="txtEdo" placeholder="Actividades a realizar"> -->
							<select name="txtEdo">
								<option value="P">Proceso</option>
								<option value="T">Terminado</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Costo</label>
							<input type="text" name="txtCosto" placeholder="Lugar de la cita">
						</div>
					</div>
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Fecha Inicio</label>
							<input type="text" name="txtFecha" placeholder="Fecha de inicio del caso">
						</div>
					</div>
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Fecha que termino</label>
							<input type="text" name="txtFechaTerm" placeholder="Fecha que termino el caso">
						</div>
					</div>
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Detalle</label>
							<input type="text" name="txtDetalle" placeholder="Detalles del caso">
						</div>
					</div>

					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Materia</label>
							<select name="materia">
								<?php $x=0;?>
								<?php foreach ($all_materia as $materia):?>
          						<option value="<?=$idMateria[$x]?>"  > <?= ($materia)?> </option>
          						<!-- <option value="Ivan Barradas">Carlos</option>
          						<option value="Roberto Bahena">Alberto</option>
          						<option value="Oscar Jim">Pepe</option> -->
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
							
          						<option value="<?=$idCliente[$j]?>"> <?= ($client)?> </option>
          						<!-- <option value="Ivan Barradas">Carlos</option>
          						<option value="Roberto Bahena">Alberto</option>
          						<option value="Oscar Jim">Pepe</option> -->
								
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