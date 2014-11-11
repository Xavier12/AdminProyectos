<?php 
class Cliente{
	private $idUsuario;
	private $nombre;
	private $apellidoP;
	private $apellidoM;
	private $sexo;
	private $domicilio;
	private $usuario;

	public function construct($idUsuario,$nombre,$apellidoP,$apellidoM,$sexo,$domicilio,$usuario)
	{
		$this->idUsuario=$idUsuario;
		$this->nombre=$nombre;
		$this->apellidoP=$apellidoP;
		$this->apellidoM=$apellidoM;
		$this->domicilio=$domicilio;
		$this->sexo=$sexo;
		$this->usuario=$usuario;
	}

	public static function addClient($usuario,$bd)
	{
		$nombre=$usuario['nombre'];
		$apP=$usuario['app'];
		$apM=$usuario['apm'];
		$dir=$usuario['dir'];
		$sexo=$usuario['sexo'];
		$user=$usuario['user'];
		$pass=$usuario['pass'];

		$direccion=$usuario['dir'];

		$query="INSERT INTO Cliente (`Nombre`,`ApP`,`ApM`,`Sexo`,`Domicilio`,`Usuario`,`Password`) VALUES ('{$nombre}','{$apP}','{$apM}','{$sexo}','{$dir}','{$user}','{$pass}')";
		$bd->ejecutar($query);
	}

	public static function getAllClientes($bd)
	{
		$query="SELECT idCliente,Nombre,ApP,ApM,Sexo,Domicilio,Usuario FROM Cliente";
		$res = $bd->ejecutar($query);
		$numeroUsuarios = $bd->num_rows($res);
		$usuarios = array();
		for ($i=0; $i < $numeroUsuarios; $i++)
		{ 
			$row = $bd->obtener_fila($res, $i); 
			$usuario = new Cliente();
			$usuario->construct( $row['idCliente'],$row['Nombre'], $row['ApP'], $row['ApM'], $row['Sexo'], $row['Domicilio'], $row['Usuario'] );
			$usuarios[] = $usuario;
		}

		return $usuarios;
	}

	public static function removeUsuario($id, $bd)
	{	
		
		$query = "DELETE FROM Cliente WHERE idCliente = '{$id}'";
		$resul = $bd->ejecutar($query);
			
	}

	public function getId()
	{
		return $this->idUsuario;
	}

	public function getUser()
	{
			return $this->usuario;
	}
	
		
	public function getNombre()
	{
		return $this->nombre;
	}

	public function getDomicilio()
	{
		return $this->domicilio;
	}

	public function getSexo()
	{
		return $this->sexo;
	}

	public function getApP()
	{
		return $this->apellidoP;
	}

	public function getApM()
	{
		return $this->apellidoM;
	}


}
?>