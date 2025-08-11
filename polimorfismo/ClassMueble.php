<?php
require_once ("ClassProducto.php");

class Mueble extends Producto{
	public $strColor;
	public $strMaterial;
	public $strStatus = "Agotado";

	public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material){
		parent::__construct($descripcion, $precio, $marca);

		$this->strMaterial = $material;
		$this->strColor = $color;
	}
	public function getInfoProducto(){
		$arrProducto = array(
			'producto' => $this->strDescripcion,
			'precio' => $this->fltPrecio,
			'stok_minimo' => $this->itnStockMinimo,
			'stado' => $this->strStatus,
			'color' => $this->strColor,
			'material' => $this->strMaterial
		);
		
		return $arrProducto;
	}

}

?>