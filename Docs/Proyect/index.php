<?php 
require('class/db.class.php');
require('class/conf.class.php');
require('Secretaria/class/Clientes.php');
require('Secretaria/class/Abogado.php');
require('Secretaria/class/Secretaria.php');

session_start();


$db=Db::getInstance();

require('Views/Cabeza.php');

if(isset($_POST['btLog']))
{
	$user = isset($_POST['txtUser']) && !empty($_POST['txtUser']) ? $_POST['txtUser'] : "";
	$pass = isset($_POST['txtPass']) && !empty($_POST['txtPass']) ? $_POST['txtPass'] : "";

	$user=$db->replace($user);
	$pass=$db->replace($pass);

	$userSecre=$db->ejecutar("SELECT idSecretaria,Usuario,Password FROM secretaria WHERE Usuario='$user' AND Password='$pass'");
	$secre=$db->num_rows($userSecre,0);

	$userClient=$db->ejecutar("SELECT idCliente,Usuario,Password FROM cliente WHERE Usuario='$user' AND Password='$pass'");
	$client=$db->num_rows($userClient,0);

	$userLawyer=$db->ejecutar("SELECT idAbogado,Usuario,Password FROM abogado WHERE Usuario='$user' AND Password='$pass'");
	$lawyer=$db->num_rows($userLawyer,0);


	if($secre>0)
	{
		$resul=$db->obtener_fila($userSecre,0);
		$_SESSION["var"]=$resul['idSecretaria'];
		echo "<script>alert('Bienvenido(a) Secretaria'); window.location='Secretaria/index.php';</script>";
	}
	else 
	if($client>0)
	{
		$resulta=$db->obtener_fila($userClient,0);
		$_SESSION["var"]=$resulta['idCliente'];
		echo "<script>alert('Bienvenido cliente'); window.location='Cliente/index.php';</script>";
	}
	else 
	if ($lawyer>0)
	{
		$result=$db->obtener_fila($userLawyer,0);
		$_SESSION["var"]=$result['idAbogado'];
		echo "<script>alert('Bienvenido abogado(a)'); window.location='Abogado/index.php';</script>";
	}
	else{echo "<script>alert('Error en Usuario/Contraseña');</script>";}
}
require('Views/index.php');



?>
