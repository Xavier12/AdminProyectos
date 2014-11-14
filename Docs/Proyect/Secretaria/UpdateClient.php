	<div class="main-container">
		<div class="row">
			<div class="small-12 small-centered medium-5 medium-centered large-6 large-centered columns">
				<h2>Modificar cliente</h2>
			</div>
		</div>
		<div class="large-12">
			<form data-abide method="POST" action="index.php?pag=modClient&idec=<?=$rowCliente['idCliente']?>">
				<div class="row">
					<div class="large-6 large-centered columns">
						<div class="name-field">
    						<label>Nombre</label>
      						<input type="text"name="txtNombre" placeholder="Nombre del abogado(a)" required value="<?=$rowCliente['Nombre']?>" >
    						<small class="error">Name is required and must be a string.</small>
  						</div>
					</div>
				</div>
				<div class="row">
					<div class="name-field">
						<div class="large-6 large-centered columns">
							<label for="">Apellido Paterno</label>
							<input type="text" name="txtApP" placeholder="Apellido paterno del abogado(a)" required value="<?=$rowCliente['ApP']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Apellido Materno</label>
						<input type="text" name="txtApM" placeholder="Apellido materno del abogado(a)" required value="<?=$rowCliente['ApM']?>">
						
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
						<label for="">Domicilio</label>
						<input type="text" name="txtDir" placeholder="Domicilio del abogado(a)" required value="<?=$rowCliente['Domicilio']?>">
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
					<div class="large-3 large-centered columns">
						
						<input  type="submit" value="Aceptar">
					</div>
				</div>
			</form>	
		</div>
	</div>
  	<?php require('FSecre.php');?>
