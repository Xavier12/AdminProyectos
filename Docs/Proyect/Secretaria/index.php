<?php
// require('class/db.class.php');
// require('class/conf.class.php');
require('class/Abogado.php');
require('class/Clientes.php');
require('class/Agenda.php');
require('class/Secretaria.php');
require('class/Caso.php');


require('HSecre.php');

$db=Db::getInstance();
$pagina=isset($_GET['pag']) ? $_GET['pag'] : "";
$pagina=$db->replace($pagina);

		foreach ($_POST as $post)
		{
			$post = $db->replace($post);
		}

		$nombre = isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
		$apP=	  isset($_POST['txtApP']) && !empty($_POST['txtApP']) ? $_POST['txtApP'] : "";
		$apM=	  isset($_POST['txtApM']) && !empty($_POST['txtApM']) ? $_POST['txtApM'] : "";
		$dir=	  isset($_POST['txtDir']) && !empty($_POST['txtDir']) ? $_POST['txtDir']: "";
		$user=    isset($_POST['txtUser']) && !empty($_POST['txtUser']) ? $_POST['txtUser']: "";
		$pass=	  isset($_POST['txtPass']) && !empty($_POST['txtPass']) ? $_POST['txtPass']: "";
		$act = 	  isset($_POST['txtAct']) && !empty($_POST['txtAct']) ? $_POST['txtAct'] : "";
		$Lugar=	  isset($_POST['txtLugar']) && !empty($_POST['txtLugar']) ? $_POST['txtLugar'] : "";
		$hr=	  isset($_POST['txtHr']) && !empty($_POST['txtHr']) ? $_POST['txtHr'] : "";
		$dir=	  isset($_POST['txtDir']) && !empty($_POST['txtDir']) ? $_POST['txtDir']: "";
		$des=	  isset($_POST['txtDes']) && !empty($_POST['txtDes']) ? $_POST['txtDes']: "";
		$sex= 	  isset($_POST['rdSex']) && !empty($_POST['rdSex']) ? $_POST['rdSex']: "";
		$tipo= 	  isset($_POST['rdTipo']) && !empty($_POST['rdTipo']) ? $_POST['rdTipo']: "";
		$abo= 	  isset($_POST['abogado']) && !empty($_POST['abogado']) ? $_POST['abogado']: "";
		$cliente= isset($_POST['cliente']) && !empty($_POST['cliente']) ? $_POST['cliente']: "";
		$materia= isset($_POST['materia']) && !empty($_POST['materia']) ? $_POST['materia'] : "";
		$costo=   isset($_POST['txtCosto']) && !empty($_POST['txtCosto']) ? $_POST['txtCosto'] : "";
		$fecha=   isset($_POST['txtFecha']) && !empty($_POST['txtFecha']) ? $_POST['txtFecha'] : "";
		$fechaTerm= isset($_POST['txtFechaTerm']) && !empty($_POST['txtFechaTerm']) ? $_POST['txtFechaTerm'] : "";
		$edo=     isset($_POST['txtEdo']) && !empty($_POST['txtEdo']) ? $_POST['txtEdo'] : "";
		$detalle=     isset($_POST['txtDetalle']) && !empty($_POST['txtDetalle']) ? $_POST['txtDetalle'] : "";


		
switch ($pagina) {
	case 'client':
		$arreglo = array('nombre' => $nombre, 'app' => $apP, 'apm' => $apM, 'dir' => $dir, 'user' => $user, 'pass' => $pass, 'sexo' =>$sex);
		Cliente::addClient($arreglo,$db);
		echo '<script language="javascript">
					document.location=".";
				</script>';
		break;

	case 'lawyer':	
		$arreglo = array('nombre' => $nombre, 'app' => $apP, 'apm' => $apM, 'dir' => $dir, 'tipo'=> $tipo, 'user' => $user, 'pass' => $pass, 'sexo' =>$sex);
		Abogado::addAbo($arreglo,$db);
		echo '<script language="javascript">
					document.location=".";
				</script>';

		break;

	case 'diary':
		
		$arreglo = array('act' => $act, 'lugar' => $Lugar, 'hr' => $hr, 'dir' => $dir, 'secre'=> 1, 'abo' => $abo, 'client' => $cliente);
		Agenda::addAgenda($db,$arreglo);
		echo '<script language="javascript">
					document.location=".";
				</script>';

		break;

	case 'secre':
		$arreglo = array('nombre' => $nombre, 'app' => $apP, 'apm' => $apM, 'dir' => $dir, 'user' => $user, 'pass' => $pass, 'sexo' =>$sex);
		Secretaria::addSecretaria($arreglo,$db);
		echo '<script language="javascript">
					document.location=".";
				</script>';

		break;

	case 'del':	
			$idElim = (isset($_GET['iduser']) && !empty($_GET['iduser'])) ? $_GET['iduser'] : "";	
			
			Abogado::removeUsuario($idElim,$db);
			echo '<script language="javascript">
					document.location=".";
				</script>';
			break;

	case 'dele':	
			$idElim = (isset($_GET['iduser']) && !empty($_GET['iduser'])) ? $_GET['iduser'] : "";	
			
			Secretaria::removeUsuario($idElim,$db);
			echo '<script language="javascript">
					document.location=".";
				</script>';
			break;

	case 'delet':	
			$idElim = (isset($_GET['iduser']) && !empty($_GET['iduser'])) ? $_GET['iduser'] : "";	
			
			Cliente::removeUsuario($idElim,$db);
			echo '<script language="javascript">
					document.location=".";
				</script>';
			break;

	case 'de':	
			
			$idElim = (isset($_GET['iduser']) && !empty($_GET['iduser'])) ? $_GET['iduser'] : "";	
			Agenda::removeAgenda($idElim,$db);
			echo "idElim";
			echo "<script>alert('hola');</script>";
			echo '<script language="javascript">
					document.location=".";
				</script>';
			break;

	case 'd':	
			
			$idElim = (isset($_GET['iduser']) && !empty($_GET['iduser'])) ? $_GET['iduser'] : "";	
			Caso::removeCaso($idElim,$db);
			
			echo "<script>alert('hola');</script>";
			echo '<script language="javascript">
					document.location=".";
				</script>';
			break;

	case 'caso':	

			$arreglo = array('edo' => $edo, 'costo' => $costo, 'fecha' => $fecha, 'fechaTerm' => $fechaTerm,'detalle' => $detalle,'cliente' => $cliente, 'materia' => $materia);

			Caso::addCaso($db,$arreglo);
			echo '<script language="javascript">
					document.location=".";
				</script>';

				echo $edo;
	echo $costo;
	echo $fechaTerm;
	echo $detalle;
	echo $fecha;
	echo $materia;
	echo $cliente;

		break;
	
	default:
			// require ('Abogados.php');
		break;
}

require ('FSecre.php');
?>