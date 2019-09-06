<?php 
require_once "Animal.php";

class Mamifero extends Animal
{
	protected $corPelo;

	public function getCorPelo()
	{
		return $this->corPelo;
	}
	public function setCorPelo($corPelo)
	{
		$this->corPelo = $corPelo;
	}
	public function locomover()
	{
		echo "Correndo<br>";
	}
	public function alimentar()
	{
		echo "Comendo Vegetais ou Carne ou Frutas<br>";
	}
	public function emitirSom()
	{
		echo "Som do Mamifero<br>";
	}
	
}


?>