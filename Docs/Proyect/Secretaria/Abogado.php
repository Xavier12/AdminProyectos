	<?php require ('HSecre.php'); ?>
	
	<div class="main-container">
		<div class="row">
			<div class="small-12 small-centered medium-5 medium-centered large-6 large-centered columns">
				<h2>Agregar abogado</h2>
			</div>
		</div>
		<div class="large-12">
			<form data-abide method="POST" action="index.php?pag=lawyer">
				<div class="row">
					<div class="large-6 large-centered columns">
						<div class="name-field">
    						<label>Nombre</label>
      						<input type="text"name="txtNombre" placeholder="Nombre del abogado(a)" required >
    						<small class="error">Name is required and must be a string.</small>
  						</div>
					</div>
				</div>
				<div class="row">
					<div class="name-field">
						<div class="large-6 large-centered columns">
							<label for="">Apellido Paterno</label>
							<input type="text" name="txtApP" placeholder="Apellido paterno del abogado(a)" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Apellido Materno</label>
						<input type="text" name="txtApM" placeholder="Apellido materno del abogado(a)" required>
						
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Domicilio</label>
						<input type="text" name="txtDir" placeholder="Domicilio del abogado(a)" required>
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label>Usuario</label>
						<input type="text" name="txtUser" placeholder="Usuario del abogado(a)">
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label>Contraseña</label>
						<input type="password" name="txtPass" placeholder="Contraseña del abogado(a)">
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Sexo</label>
						<input type="radio" name="rdSex" value="M"><label>Masculino</label>
						<input type="radio" name="rdSex" value="F"><label>Femenino</label>
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Tipo</label>
						<input name="rdTipo" type="radio" value="T"><label>Titular</label>
						<input name="rdTipo" type="radio" value="A"><label>Auxiliar</label>
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
  	<?php require('FSecre.php');?>
