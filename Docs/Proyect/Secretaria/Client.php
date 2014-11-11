	<?php require ('HSecre.php'); ?>
	<div id="main-content">
		<!-- <div class="small-12 large-12 small-12-centered large-centered columns"> -->
		<div class="row">
			<div class="small-12 small-centered medium-5 medium-centered large-6 large-centered columns">
				<h2>Agregar cliente</h2>
			</div>
		</div>
			<form method="POST" action="index.php?pag=client">
				<div class="row">
					<div class="large-6 large-centered columns">
						<label>Nombre</label>
						<input type="text" name="txtNombre" placeholder="Nombre del cliente">
					</div>
				</div>

				<div class="row">
					<div class="large-6 large-centered columns">
						<label>Apellido Paterno</label>
						<input type="text" name="txtApP"placeholder="Apellido Paterno del cliente">	
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Apellido Materno</label>
						<input type="text" name="txtApM"placeholder="Apellido Materno del cliente">
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Domicilio</label>
						<input type="text" name="txtDir"placeholder="Dirección del cliente">
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for"">Usuario</label>
						<input type="text" name="txtUser" placeholder="Usuario del cliente">
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Contraseña</label>
						<input type="password" name="txtPass" placeholder="Contraseña del usuario">
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Sexo</label>
						<input name="rdSex" type="radio" value="M"><label for="rdSex">Masculino</label>
						<input name="rdSex" type="radio" value="F"><label for="rdSex">Femenino</label>
					</div>
				</div>
				<div class="row">
					<div class="large-3 large-centered columns">
						<input type="submit" value="Aceptar">
					</div>
				</div>
			</form>
		<!-- </div> -->
	</div>
	<?php require('FSecre.php');?>