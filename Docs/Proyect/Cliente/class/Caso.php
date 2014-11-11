<?php
	class Caso
	{

		public function construct($idCaso,$estado,$costo,$fecha,$asunto,$cliente)
		{
			$this->idCaso=$idCaso;
			$this->estado=$estado;
			$this->costo=$costo;
			$this->fecha=$fecha;
			$this->asunto=$asunto;
			$this->cliente=$cliente;
		}

		public static function addCaso($bd,$caso)
		{
			$materia=$caso['materia'];
			$edo=$caso['edo'];
			$cliente=$caso['cliente'];
			$costo=$caso['costo'];
			$fecha=$caso['fecha'];
		
			$query="INSERT INTO Caso(`Estado`, `Costo`, `FechaInicio`, `AsuntoidAsunto`, `ClienteidCliente`) VALUES ('{$edo}','{$costo}','{$fecha}','{$materia}','{$cliente}')";
			$bd->ejecutar($query);	
		}

		public static function getAllCasos($bd)
		{
			$query="SELECT idCaso,Estado,Costo,FechaInicio,AsuntoidAsunto,ClienteidCliente FROM Caso";
			$resultado = $bd->ejecutar($query);
			$numeroUsuarios = $bd->num_rows($resultado);
			$usuarios = array();
			for ($i=0; $i < $numeroUsuarios; $i++)
			{ 
				$row = $bd->obtener_fila($resultado, $i); 
				$usuario = new Caso();
				$usuario->construct($row['idCaso'],$row['Estado'], $row['Costo'], $row['FechaInicio'], $row['AsuntoidAsunto'], $row['ClienteidCliente']);
				$usuarios[] = $usuario;
			}
			return $usuarios;


			return $caso;
		}

		public static function removeCaso($id, $bd)
		{	
		
			$query = "DELETE FROM Caso WHERE idCaso = '{$id}'";
			$resul = $bd->ejecutar($query);
			
		}



	public function getId()
	{
		return $this->idCaso;
	}

	public function getEstado()
	{
		return $this->estado;
	}
	
	public function getCosto()
	{
		return $this->costo;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function getAsunto()
	{
		return $this->asunto;
	}

	public function getCliente()
	{
		return $this->cliente;
	}



	}
?>