<?php
//Definimos una clase
class Conexion{
	// Creamos variables de tipo privado
	// Estas variables almacenaran los datos de la conexion a la base de datos
	private $host = "localhost"; 
	private $user = "root";
	private $password = "";
	private $db = "purba_conexion";
	private $conect;

	//creamos un metodo constructor
	public function __construct(){
		//creamos una varialble para la conexion
		//usamos el driver de mysql y definimos el host, la base de datos y el charset
		//usamos el operador de concatenacion para unir las variables
		$connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
		//usamos un bloque try-catch para manejar errores de conexion
		//en el bloque try intentamos establecer la conexion a la base de datos
		try{
			$this->conect = new PDO($connectionString, $this->user, $this->password);
			//establecemos el modo de error a excepciones
			//esto nos permite capturar errores de conexion
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Conexion exitosa";
		//capturamos el error de conexion
		} catch(Exception $e){
			$this->conect = "Error de conexion";
			//mostramos el mensaje de error
			echo "Error:".$e->getMessage();
		}

	}
} 
// Creamos una instancia de la clase Conexion
// Esto nos permite establecer la conexion a la base de datos
$conect = new Conexion();
?>