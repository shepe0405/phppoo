<?php 
require_once 'Lutador.php';

/**
 * 
 */
class Luta
{
	
	//ATRIBUTOS
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovada;

	//METODOS
		//ESPECIAS
	public function getDesafiado()
	{
		return $this->desafiado;
	}
	public function getDesafiante()
	{
		return $this->desafiado;
	}
	public function getRounds()
	{
		return $this->desafiado;
	}
	public function getAprovada()
	{
		return $this->desafiado;
	}
	public function setAprovada($x)
	{
		$this->aprovada = $x;
	}
	public function setRounds($x)
	{
		$this->rounds = $x;
	}
	public function setDesafiante($x)
	{
		$this->desafiante = $x;
	}
	public function setDesafiado($x)
	{
		$this->desafiado = $x;
	}

	//PROPIOS
		public function marcarLuta($l1, $l2 , $round)
		{
			if ($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)) {
				$this->setAprovada(true);
				$this->setRounds($round);
				echo "<p>Luta Marcada</p>";
				$this->setDesafiado($l1);
				$this->setDesafiante($l2);
			} else {
				echo "<p>Erro</p>";
				$this->setAprovada(false);
				$this->setDesafiado(null);
				$this->setDesafiante(null);
			}
		}
		public function lutar()
		{
			if ($this->getAprovada() == true) {
			$this->desafiante->apresentar();
			$this->desafiado->apresentar();
			$var = rand(0,2);
				switch ($var) {
					case 0:
						echo "<p>Empate!!</p>";
						$this->desafiante->empatarLuta();
						break;
					case 1:
						echo "<p>O lutador: '".$this->desafiante->getNome()." '".$this->desafiante->getApelido()." Ganhou!!</p>";
						$this->desafiante->ganharLuta();
						$this->desafiado->perderLuta();
						break;
					case 2:
						echo "<p>O lutador:	'".$this->desafiado->getNome()."'".$this->desafiado->getApelido()." Ganhou!!</p>";
						$this->desafiado->ganharLuta();
						$this->desafiante->perderLuta();
						break;
				}
			} else {
				echo "<p>Luta não pode ocorrer</p>";
			}
		}
}


?>
