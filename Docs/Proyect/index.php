<?php 
require('class/db.class.php');
require('class/conf.class.php');

$db=Db::getInstance();


$user = isset($_POST['txtUser']) && !empty($_POST['txtUser']) ? $_POST['txtUser'] : "";
$pass= isset($_POST['txtPass'])  && !empty($_POST['txtPass']) ? $_POST['txtPass'] : "";

$user=$db->replace($user);
$pass=$db->replace($pass);


$userSecre=$db->ejecutar("SELECT Usuario,Password FROM usuriosecre WHERE Usuario='$user' AND Password='$pass'");
$secre=$db->num_rows($userSecre);

$userClient=$db->ejecutar("SELECT Usuario,Password FROM usuariocliente WHERE Usuario='$user' AND Password='$pass'");
$client=$db->num_rows($userClient);

$userLawyer=$db->ejecutar("SELECT Usuario,Password FROM usuarioabogado WHERE Usuario='$user' AND Password='$pass'");
$lawyer=$db->num_rows($userLawyer);

if($secre>0)
{
	echo "<script>alert('Bienvenido(a) Secretaria'); window.location='Secretaria/index.php'; </script>";
}elseif ($client>0)
{
	echo "<script>alert('Bienvenido(a) Cliente'); window.location='Cliente/index.php'; </script>";
}elseif ($lawyer>0)
{
	echo "<script>alert('Bienvenido(a) Abogado');</script>";
}elseif ($client==0 || $lawyer==0 || $secre==0) 
{
	echo "<script>alert('Usuario o contraseña incorrectos');  </script>";
}
require('Views/Cabeza.php');
require('Views/index.php');
?>
