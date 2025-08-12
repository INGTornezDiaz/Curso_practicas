<?php 
//IMPORTAR EL ARCHIVO AUTOLOAD PARA FUNCION DE INSERCION
require_once("autoload.php");

//CLASSE USUARIO UTILIZANDO UNA EXTENCION AL ARCHIVO CONEXION
class Usuario extends Conexion{
    
    //VARIABLES DE CAMPOS DE TABLAS
    private $strNombre;
    private $intTelefono;
    private $strEmail;
    private $conexion;

    //METODO CONSTRUCTOR
    public function __construct(){
    	$this->conexion = new Conexion();
        // Conexion para el metodo prepare de la linea 25
        $this->conexion = $this->conexion->conect();

    }

    //METODO PARA INSERTAR USUARIOS EN LA BASE DE DATOS
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

    //FUNCION PARA OBTENER LOS USUARIOS Y MOSTRARLOS COMO UN ARRAY
    public function getUsario()
    {
        $sql = "SELECT * FROM usuario";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    //FUNCION PARA ACTUALIZAR USUARIO POR MEDIO DEL ID
    public function updateUsert(int $id, string $nombre, int $telefono, string $email )
    {
        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;
        $sql = "UPDATE usuario SET nombre=?, telefono=?, email=? WHERE id=$id";//instuccion para actualizar el usario dependiendo de su id
        $update = $this->conexion->prepare($sql); //METODO PREPARE FUNCIONA COMO PROTECION ANTE INYECCIONES SQL.
        $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail); //ARRAY DE LOS DATOS OBTENIDOS DE LA TABLA DE LA DB
        $resExecute = $update->execute($arrData);
        return $resExecute;
    }

    //FUNCION PARA OBTENER UN SOLO USUARIO
    public function getUser(int $id)
    {
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $arrWhere =  array($id);
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