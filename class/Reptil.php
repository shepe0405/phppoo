<?php 
require_once "Animal.php";

class Reptil extends Animal
{
	
	protected $corEscama;

	public function setCorEScama($corEscama)
	{
		$this->corEscama = $corEscama;
	}
	public function getCorEscama()
	{
		return $this->corEscama;
	}
	public function locomover()
	{
		echo "Andando<br>";
	}
	public function alimentar()
	{
		echo "Comendo Vegtais ou Animais pequenos ou insetos<br>";
	}
	public function emitirSom()
	{
		echo "Somo do Reptil<br>";
	}
}


?>