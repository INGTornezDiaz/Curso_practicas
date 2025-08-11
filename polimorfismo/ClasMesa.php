<?php
require_once ("ClassMueble.php");

class Mesa extends Mueble{

	private $strForma = "";
	protected $strTamanio;
	public $strStatus = "Activo";

	public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio){

		parent::__construct($descripcion, $precio, $marca, $color, $material);

		$this->strTamanio = $tamanio;
	}

	public function setForma(string $forma){
		$this->strForma = $forma;

	}
	public function getInfoProducto(){
		$arrProducto = array(
			'producto' => $this->strDescripcion,
			'precio' => $this->fltPrecio,
			'stok_minimo' => $this->itnStockMinimo,
			'estado' => $this->strStatus,
			'color' => $this->strColor,
			'material' => $this->strMaterial,
			'Tamaño' => $this->strTamanio,
			'Forma' => $this->strForma
		);
		
		return $arrProducto;


	}
}

?>