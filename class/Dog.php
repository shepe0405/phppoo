<?php 
require_once 'Mamifero.php';

/**
 * 
 */
class Dog extends Mamifero
{
	
	public function emitirSom()
	{
		echo "Latindo<br>";
	}
	public function alimentar()
	{
		echo "Comendo Ração<br>";
	}
	public function brincar()
	{
		echo "Pegando a Bolinha<br>";
	}
	public function abanarRabo()
	{
		echo "Abanando o rabinho<br>";
	}
	public function reagirFrase($frase)
	{
		if ($frase == "Bom Garoto" || $frase == "Olá") {
			echo "Abanando rabinho e Latindo<br>";
		} else {
			echo "RRRRRRRRRRRRRRRRRR!!!!!<br>";
		}
		
	}
	public function reagirHora($horario)
	{
		if ($horario > 18 && $horario < 24) {
			echo "Ignorar<br>";
		} elseif ($horario > 12 && $horario < 18) {
			echo "Abanando e Latindo<br>";
		} elseif ($horario > 6 && $horario < 12) {
			echo "Abanando<br>";
		} elseif ($horario < 6 && $horario >= 0) {
			echo "Dormindo ZZZZZ<br>";
		} else {
			echo "Erro<br>";
		}
		
	}
	public function reagirDono($dono)
	{
		if ($dono == true) {
			echo "Abanando Rabo<br>";
		} else {
			echo "RRRRRRRRRRRRRRRRRR!!!!!!<br>";
		}
	}
	public function reagirIdade($idade, $peso)
	{
		if ($idade < 12) {
			if ($peso > 80) {
				echo "Latindo<br>";
			} else {
				echo "Abanando o Rabo<br>";
			}
		} else {
			if ($peso > 80) {
				echo "Ignorar<br>";
			} else {
				echo "RRRRRRRRRRRRRRRRRR!!!!!<br>";
			}
			
		}
		
	}
}
