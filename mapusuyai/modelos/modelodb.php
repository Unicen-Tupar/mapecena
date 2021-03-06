<?php

/**
 * Clase abstracta de acceso a contenidos en base de datos. 
 * @todo Se puede extraer la funcionalidad de conexion a base de datos y localizarlo en una clase propio de base de dats, 
 * 
 */

abstract class ModeloDB{
	
	/**
	 * Usuario de acceso a base de datos
	 * @access private 
	 * @var String
	 */
	private $user = 'root';
	private $pass = '';
	private $host = 'localhost';
	private $db = 'mapusuyai';
	protected $conn = null;
	
	protected abstract function load();
	
	
	protected function connect(){
		$conn = null;
		try{
			$conn = new PDO(
				"mysql:host=$this->host;dbname=$this->db",
				$this->user,
				$this->pass
			);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
		$this->conn = $conn;
		return $conn;
	}

	
	public function connection(){
		if ($this->conn == null)
			$this->connect();
		return $this->conn;	
	}
	
	
	public function query($sql){
		$conn = $this->connection();
		
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()));
		}
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
		
		return $data;
	}	 
	
}



?>