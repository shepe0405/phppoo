<?php 
require_once 'Mamifero.php';


/**
 * 
 */
class Canguru extends Mamifero
{
	
	public function usarBolsa()
	{
		echo "Usando a bolsa para carregar algo<br>";
	}
	public function locomover()
	{
		echo "Saltando<br>";
	}
	public function alimentar()
	{
		echo "Comendo Frutas e Folhas<br>";
	}
}