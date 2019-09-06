<?php 
require_once "Animal.php";

class Peixe extends Animal
{
	protected $corEscama;

	public function setCorEscama($corEscama)
	{
		$this->corEscama = $corEscama;
	}
	public function getCorEscama()
	{
		return $this->corEscama;
	}
	public function soltarBolha()
	{
		echo "BLU BLU BLU<br>";
	}
	public function locomover()
	{
		echo "Nadando<br>";
	}
	public function alimentar()
	{
		echo "Comendo Substâncias<br>";
	}
	public function emitirSom()
	{
		echo "Peixe não faz som<br>";
	}
}


?>