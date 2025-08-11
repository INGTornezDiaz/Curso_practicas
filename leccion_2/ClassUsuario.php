<?php 
	/// Encapsulamiento
	class Usuario{

		private $strnombre;
		private $trsemail;
		private $strtipo;
		private $strclave; /// no se puede acceder desde ninguna parte
		protected $strfecharegistro;/// No se puede acceder 
		static $strestado = "Activo"; /// Aqui es cuando se declara un estado no se puede acceder a una delcaracion estatica por que no puede peretener a un objeto solo a la clase.

		function __construct(string $nombre, string $email, string $tipo){

			$this->strnombre = $nombre;
			$this->stremail = $email;
			$this->strtipo = $tipo;
			$this->strclave = rand();
			$this->strfecharegistro = date('Y-m-d H:m:s');
		}
		///Funcion para obtener datos de las variables privadas
		public function getnombre():string{
			return $this->strnombre;
		}

		public function getperfil(){

			echo "Datos del usuario <br>";
			echo "Nombre:".$this->strnombre."<br>";
			echo "Email:".$this->stremail."<br>";
			echo "Tipo:".$this->strtipo."<br>";
			echo "Clave:".$this->strclave."<br>";
			echo "Fecha registro:".$this->strfecharegistro."<br>";
			echo "Estado:".self::$strestado."<br>";
		}

		public function setcambiarclave(string $pass){
			$this->strclave = $pass;
		}

}///end clas usuario
?>