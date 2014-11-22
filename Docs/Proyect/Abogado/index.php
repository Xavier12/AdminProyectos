<?php 
	// require('HAbo.php');
	require('class/Caso.php');
	require('class/db.class.php');
  	require('class/conf.class.php'); 
  	require('HAbo.php');
	


	$db=Db::getInstance();
	$pagina=isset($_GET['pag']) ? $_GET['pag'] : "";
	$pagina=$db->replace($pagina);

	switch ($pagina) {
		case 'cerrar':
			require('../class/cerrarSesion.php');
			break;
		
		default:
			# code...
			break;
	}
?>