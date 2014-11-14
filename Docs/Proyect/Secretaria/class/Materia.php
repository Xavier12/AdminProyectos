<?php
	class Materia
	{

		public function construct($idMateria,$tipo)
		{
			$this->idMateria=$idMateria;
			$this->tipo=$tipo;
			
		}

		public static function addMateria($bd,$Materia)
		{
			$tipo=$Materia['tipo'];
			
		
			$query="INSERT INTO Materia(`tipo`) VALUES ('{$tipo}')";
			$bd->ejecutar($query);	
		}

		public static function getAllMaterias($bd)
		{
			$query="SELECT idMateria,tipo FROM Materia";
			$resultado = $bd->ejecutar($query);
			$numeroUsuarios = $bd->num_rows($resultado);
			$usuarios = array();
			for ($i=0; $i < $numeroUsuarios; $i++)
			{ 
				$row = $bd->obtener_fila($resultado, $i); 
				$usuario = new Materia();
				$usuario->construct($row['idMateria'],$row['tipo']);
				$usuarios[] = $usuario;
			}
			return $usuarios;
		}

		public static function removeMateria($id, $bd)
		{	
		
			$query = "DELETE FROM Materia WHERE idMateria = '{$id}'";
			$resul = $bd->ejecutar($query);
			
		}



	public function getId()
	{
		return $this->idMateria;
	}

	public function getTipo()
	{
		return $this->tipo;
	}
	


	}
?>