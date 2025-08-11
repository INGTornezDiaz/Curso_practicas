<?php
trait Carrito{

	public $strPorducto;
	public $intCantidad;

	public function setCarrito(string $producto, int $Cantidad)
	{
		$this->strPorducto = $producto;
		$this->intCantidad = $Cantidad;
	}
}

?>