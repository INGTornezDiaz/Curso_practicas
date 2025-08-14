<?php
class homeModel1
{
	public function __construct()
	{
		//echo "Mesaje desde el modelo home"
	}	

	public function getCarrito($params)
	{
		return "Datos del carrito No. ".$params;
	}
}
?>