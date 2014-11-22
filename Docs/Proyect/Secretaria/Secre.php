<?php 
	$query= "SELECT * FROM Secretaria WHERE idSecretaria = '{$id}'";
		$resul=$db->ejecutar($query);
		

		while($row=$db->obtener_fila($resul,0))
		{
			$nombre=$row['Nombre']." ".$row['ApP']." ".$row['ApM'];
			$sexo=$row['Sexo'];
			$dom=$row['Domicilio'];
			$user=$row['Usuario'];
		}
 ?>
<div id="main-content">
		<!-- <div class="small-12 large-12 small-12-centered large-centered columns"> -->
		<div class="row">
			<div class="small-12 small-centered medium-5 medium-centered large-6 large-centered columns">
				<h2>Bienvenido</h2>
			</div>
		</div>
		<div class="row">
			<div class="left">
				<img src="../images/p.jpg" height="100" width="350">	
			</div>
		</div>
		<hr class="separador">
		<div class="row">
			<div class="large-6 large-centered columns">
				<label>Nombre</label>
				<input type="text" value="<?=$nombre?>"  disabled>
			</div>
		</div>
		<div class="row">
			<div class="large-6 large-centered columns">
				<label>Domicilio</label>
				<input type="text" value="<?=$dom?>"  disabled>
			</div>
		</div>
		<div class="row">
			<div class="large-6 large-centered columns">
				<label>Usuario</label>
				<input type="text" value="<?=$user?>"  disabled>
			</div>
		</div>
		
		
			
		<!-- </div> -->
	</div>