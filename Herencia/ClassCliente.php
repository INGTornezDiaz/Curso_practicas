<?php 
require_once ("ClassPersona.php");

class Cliente extends Persona{

	protected $fltcredito;

	function __construc(int $dpi, string $nombre, int $edad){

		parent::__construc($dpi, $nombre, $edad);
	}

	public function setcredito(string $credito){
		$this->fltcredito = ´$credito;
	}
	public function getcredito():float {
		return $this->fltcredito = ´$credito;
	}

}

?>