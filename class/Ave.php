<?php 
require_once "Animal.php";

class Ave extends Animal
{
	protected $corPena;

	public function getCorPena()
	{
		return $this->corPena;
	}
	public function setCorPena($corPena)
	{
		$this->corPena = $corPena;
	}
	public function locomover()
	{
		echo "Voar<br>";
	}
	public function alimentar()
	{
		echo "Comendo Pequenos Animais ou Frutas<br>";
	}
	public function emitirSom()
	{
		echo "Piar<br>";
	}
	public function fazerNinho()
	{
		echo "Fazendo Ninho<br>";
	}
}


?>