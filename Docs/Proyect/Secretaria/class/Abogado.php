<?php 
	class Abogado{

	public function construct($idUsuario,$nombre,$apellidoP,$apellidoM,$sexo,$domicilio,$tipo,$usuario)
	{
		$this->idUsuario=$idUsuario;
		$this->nombre=$nombre;
		$this->apellidoP=$apellidoP;
		$this->apellidoM=$apellidoM;
		$this->domicilio=$domicilio;
		$this->tipo=$tipo;
		$this->sexo=$sexo;
		$this->usuario=$usuario;
	}

	public static function getAbo($id,$bd)
	{
		$row =$bd->ejecutar(" SELECT *  FROM Abogado WHERE idAbogado='{$id}' ");
		$result=$bd->obtener_fila($row,0);
			
		return $result;	
	}

	public static function addAbo($usuario,$bd)
	{
			$nombre=$usuario['nombre'];
			$apP=$usuario['app'];
			$apM=$usuario['apm'];
			$sexo=$usuario['sexo'];
			$tipo=$usuario['tipo'];
			$dom=$usuario['dir'];
			$user=$usuario['user'];
			$pass=$usuario['pass'];

			$query="INSERT INTO Abogado (`Nombre`,`ApP`,`ApM`,`Sexo`,`Domicilio`,`Tipo`,`Usuario`,`Password`) VALUES ('{$nombre}','{$apP}','{$apM}','{$sexo}','{$dom}','{$tipo}','{$user}','{$pass}')";
			$bd->ejecutar($query);	
	}

	public static function getAllAbogados($bd)
	{
			$query="SELECT idAbogado,Nombre,ApP,ApM,Sexo,Domicilio,Tipo,Usuario FROM Abogado";
			$resultado = $bd->ejecutar($query);
			$numeroUsuarios = $bd->num_rows($resultado);
			$usuarios = array();
			for ($i=0; $i < $numeroUsuarios; $i++)
			{ 
				$row = $bd->obtener_fila($resultado, $i); 
				$usuario = new Abogado();
				$usuario->construct($row['idAbogado'],$row['Nombre'], $row['ApP'], $row['ApM'], $row['Sexo'], $row['Domicilio'], $row['Tipo'],$row['Usuario'] );
				$usuarios[] = $usuario;
			}
			return $usuarios;
	}

	public static function removeUsuario($id, $bd)
	{	

			$query = "DELETE FROM Abogado WHERE idAbogado = '{$id}'";
			$resul = $bd->ejecutar($query);
	}

	public static function update($usuario, $bd)
	{
			$id= $usuario['ide'];
			$nombre= $usuario['nombre'];
			$app = $usuario['app'];
			$apm= $usuario['apm'];
			$dir=$usuario['dir'];
			$tipo=$usuario['tipo'];	
			
			$query="UPDATE Abogado SET `Nombre` = '{$nombre}', `ApP` = '{$app}', `ApM` = '{$apm}', `Domicilio` = '{$dir}', `Tipo` ='{$tipo}' WHERE `idAbogado` = '{$id}' ";
			
			$bd->ejecutar($query);			
	}


	public function getId()
	{
		return $this->idUsuario;
	}

	public function getUser()
	{
		return $this->usuario;
	}
	
	public function getTipo()
	{
		return $this->tipo;
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