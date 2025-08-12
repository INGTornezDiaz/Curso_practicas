<?php 
require_once("autoload.php");

class Usuario extends Conexion{
    
    private $strNombre;
    private $intTelefono;
    private $strEmail;
    private $conexion;

    public function __construct(){
    	$this->conexion = new Conexion();

    }

    public function inserUsaurio(string $nombre, int $telefono, string $email)
    {
    	$this->strNombre = $nombre;
    	$this->intTelefono = $telefono;
    	$this->strEmail = $email;

    	$sql = "INSERT INTO usuario(nombre,telefono,email) VALUES (?,?,?)";
    	$insert = $this->conexion->prepare($sql);//Error no reconoce a prepare 
    	$arrData = array($this->strNombre,$this->intTelefono,$this->strEmail);
    	$resInsert = $insert->execute($arrData);
    	$idInsert = $this->conexion->lastInsertId();
    	return $idInsert;

    }
}
?>ñ