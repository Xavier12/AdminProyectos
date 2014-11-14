<?php
	class Agenda
	{
		public function construct($idAgenda,$lugar,$direccion,$actividad,$hr,$cliente,$abogado,$secretaria)
		{
			$this->idAgenda=$idAgenda;
			$this->lugar=$lugar;
			$this->direccion=$direccion;
			$this->actividad=$actividad;
			$this->secretaria=$secretaria;
			$this->cliente=$cliente;
			$this->hr=$hr;
			$this->abogado=$abogado;
		}

		public static function addAgenda($bd,$agenda)
		{
			$lugar=$agenda['lugar'];
			$dir=$agenda['dir'];
			$act=$agenda['act'];
			$hr=$agenda['hr'];
			$secre=$agenda['secre'];
			$abogado=$agenda['abo'];
			$client=$agenda['client'];
			
			
			$query="INSERT INTO Agenda(`Lugar`, `Direccion`, `Actividad`, `Hr`, `SecretariaidSecretaria`, `AbogadoidAbogado`, `ClienteidCliente`) VALUES ('{$lugar}','{$dir}','{$act}','{$hr}','{$secre}','{$abogado}','{$client}')";
			$bd->ejecutar($query);	
		}

		public static function getAllAgenda($bd)
		{
			$query="SELECT idAgenda,Lugar,Direccion,Actividad,Hr,AbogadoidAbogado,SecretariaidSecretaria,ClienteidCliente FROM Agenda";
			$resultado = $bd->ejecutar($query);
			$numeroUsuarios = $bd->num_rows($resultado);
			$usuarios = array();
			for ($i=0; $i < $numeroUsuarios; $i++)
			{ 
				$row = $bd->obtener_fila($resultado, $i); 
				$usuario = new Agenda();
				$usuario->construct($row['idAgenda'],$row['Lugar'], $row['Direccion'], $row['Actividad'], $row['Hr'], $row['AbogadoidAbogado'], $row['ClienteidCliente'], $row['SecretariaidSecretaria']);
				$usuarios[] = $usuario;
			}
			return $usuarios;
		}

		public static function update($usuario, $bd)
		{
			$id= $usuario['iden'];
			$cliente=$usuario['client'];
			$secre=$usuario['secre'];
			$abo=$usuario['abo'];
			$lugar = $usuario['lugar'];
			$dir= $usuario['dir'];
			$hr=$usuario['hr'];
			$act=$usuario['act'];	
			
			$query="UPDATE Agenda SET `Lugar` = '{$lugar}', `Direccion` = '{$dir}', `Actividad` = '{$act}', `Hr` = '{$dir}', `AbogadoidAbogado` ='{$tipo}' WHERE `ClienteidCliente` = '{$id}' ";
			
			$bd->ejecutar($query);			
		}

		public static function removeAgenda($id, $bd)
		{	
			echo $id;
			$query = "DELETE FROM Agenda WHERE idAgenda = '{$id}'";
			$resul = $bd->ejecutar($query);
			
		}

	public function getId()
	{
		return $this->idAgenda;
	}

	public function getActividad()
	{
		return $this->actividad;
	}
	
	public function getHr()
	{
		return $this->hr;
	}

	public function getDireccion()
	{
		return $this->direccion;
	}

	public function getSecretaria()
	{
		return $this->secretaria;
	}

	public function getAbogado()
	{
		return $this->abogado;
	}

	public function getCliente()
	{
		return $this->cliente;
	}

	public function getLugar()
	{
		return $this->lugar;
	}

	
	}
?>