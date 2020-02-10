<?php
/**
  * Conexión a DB
  */
class Conexion {
	public $conn;
	
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "tareas";

		try {
			// Create connection
			$this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
		catch(PDOException $e)
			{
			echo "Connection failed: " . $e->getMessage();
			}

	}

	
	public function insertar($desc,$prio)
	{
		$sql = "INSERT INTO tarea(Descripcion, Prioridad)
		 VALUES ('$desc','$prio')";

		$this->conn->exec($sql);
	}
	
	
	public function consultar()
	{
		$result = [];
		$stmt = $this->conn->prepare("SELECT * FROM tarea");
		$stmt->execute();

		// set the resulting array to associative
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		
		return $stmt->fetchAll();
	}
}

?>