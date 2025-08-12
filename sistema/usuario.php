<?php 
require_once("autoload.php");

class Usuario extends Conexion{
    
    private $strNombre;
    private $intTelefono;
    private $strEmail;
    private $conexion;

    public function __construct(){
    	$this->conexion = new Conexion();
        // Conexion para el metodo prepare de la linea 25
        $this->conexion = $this->conexion->conect();

    }

    public function inserUsaurio(string $nombre, int $telefono, string $email)
    {
    	$this->strNombre = $nombre;
    	$this->intTelefono = $telefono;
    	$this->strEmail = $email;

    	$sql = "INSERT INTO usuario(nombre,telefono,email) VALUES (?,?,?)";
    	$insert = $this->conexion->prepare($sql);//ya se soluciono XD
    	$arrData = array($this->strNombre,$this->intTelefono,$this->strEmail);
    	$resInsert = $insert->execute($arrData);
    	$idInsert = $this->conexion->lastInsertId();
    	return $idInsert;

    }

    public function getUsario()
    {
        $sql = "SELECT * FROM usuario";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    public function updateUsert(int $id, string $nombre, int $telefono, string $email )
    {
        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;
        $sql = "UPDATE usuario SET nombre=?, telefono=?, email=? WHERE id=$id";//instuccion para actualizar el usario dependiendo de su id
        $update = $this->conexion->prepare($sql);
        $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail);
        $resExecute = $update->execute($arrData);
        return $resExecute;
    }

    //FUNCION PARA OBTENER UN SOLO USUARIO
    public function getUser(int $id)
    {
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $arrWhere = array($id);
        $query = $this->conexion->prepare($sql);
        $query->execute($arrWhere);
        $request = $query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }
    //FUNCION PARA ELIMINAR EL USUARIO
    public function deluser(int $id)
    {
        $sql = "DELETE FROM usuario WHERE id = ?";
        $arrWhere = array($id);
        $delete = $this->conexion->prepare($sql);
        $del = $delete->execute($arrWhere);
        return $del;
    }
}
?>