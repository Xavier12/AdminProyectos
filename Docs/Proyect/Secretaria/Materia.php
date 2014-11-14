	<?php require ('HSecre.php'); ?>
<div id="main-content">
		<div class="row">
			<div class="small-12 small-centered medium-5 medium-centered large-6 large-centered columns">
				<h2>Agregar tipos de casos</h2>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-12 small-centered large-centered columns">
				<form method="POST" action="index.php?pag=materia">
					<div class="row">
						<div class="large-6 large-centered columns">
							<label>Tipo</label>
							<input type="text" name="txtMateria" placeholder="Tipo de caso">
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