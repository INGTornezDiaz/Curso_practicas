<?php
class Producto{                                          
	public $strDescripcion;
	public $fltPrecio;
	protected $itnStockMinimo = 10;
	protected $strStatus = "Activo";

	public function __construct(string $descripcion, float $precio){
		$this->strDescripcion = $descripcion;
		$this->fltPrecio = $precio;

	}
	public function getInfoProducto(){
		$arrProducto = array(
			'producto' => $this->strDescripcion,
			'precio' => $this->fltPrecio,
			'stock_minimo' => $this->itnStockMinimo,
			'estado' => $this->strStatus
		);
		
		return $arrProducto;

	}
	}  

?>
