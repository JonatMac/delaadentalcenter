<?php

#PROGRAMACION ORIENTADA A OBJETOS
/**
 * 
 */
class Automovil
{
	
	public function mostrar()
	{
		echo "<p> HOLA! SOY UN $this->marca, model $this->modelo</p>";
	}
}

$a= new Automovil();
$a -> marca ="TOYOTA";
$a -> modelo ="COROLLA";
$a -> mostrar();

?>