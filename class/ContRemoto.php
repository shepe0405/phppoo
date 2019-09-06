<?php 

require_once 'interfaces/IntCont.php';

/**
 * 
 */
class ContRemoto implements IntCont
{
	//ATRIBUTOS
		private $volume;
		private $tocando;
		private $canal;
		private $ligada;
	
//METODOS
	//ESPECIAIS
	public function __construct()
	{
		$this->setVolume(50);
		$this->setLigada(false);
		$this->setTocando(false);
	}
	public function getVolume()
	{
		return $this->volume;
	}
	public function setVolume($x)
	{
		$this->volume = $x;
	}
	public function getTocando()
	{
		return $this->tocando;
	}
	public function setTocando($x)
	{
		$this->tocando = $x;
	}
	public function getCanal()
	{
		return $this->canal;
	}
	public function setCanal($x)
	{
		$this->canal = $x;
	}
	public function getLigada()
	{
		return $this->ligada;
	}
	public function setLigada($x)
	{
		$this->ligada = $x;
	}

	//INTERFACE

	public function ligar()
	{
		if ($this->getLigada() == true) {
			echo "Já está Ligado!!!<br>";
		} else {
			$this->setLigada(true);
			$this->setCanal(0);
		}
	}
	public function desligar()
	{
		if ($this->getLigada() == true) {
			$this->setLigada(false);
		} else {
			echo "Já está Desligado!!!<br>";
		}
	}
	public function abrirMenu()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			echo "Abrindo Menu...<br>";
			echo "Menu<br>";
			echo "Volume: ".$this->getVolume();
			for ($i=0; $i < $this->getVolume() ; $i += 10) { 
				echo " |";
			}
			echo "<br>";
			echo "Canal: ".$this->getCanal()."<br>";
			$var = ($this->getTocando() == true) ? "Sim" : "Não" ;
			echo "Tocando: ".$var."<br>";
		}
	}
	public function fecharMenu()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			echo "Fechando Menu...<br>";
		}
	}
	public function mudo()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			$this->setVolume($this->getVolume() - $this->getVolume());
			echo "Mudo<br>";
		}
	}
	public function tirarMudo()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			if ($this->getVolume() == 0) {
				echo "Tirando do Mudo...<br>";
				$this->setVolume(50);
			} else {
				echo "Não está no Mudo...<br>";
			}
		}
	}
	public function maisVol()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			$var = $this->getVolume() + 10;
			if ($var > 100) {
				echo "<p>Erro. Volume já está no máximo!!!</p>";
			} else {
				$this->setVolume($this->getVolume() + 10);
				echo "Volume: ".$this->getVolume()." ";
				for ($i = 0; $i < $this->getVolume(); $i+=10) { 
					echo "|";
				}
				echo "<br>";
			}
		}
	}
	public function menosVol()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			$var = $this->getVolume() - 10;
			if ($var <= 0) {
				echo "<p>Erro. Volume já está no minimo!!!</p>";
			} else {
				$this->setVolume($this->getVolume() - 10);
				echo "Volume: ".$this->getVolume()." ";
				for ($i = 0; $i < $this->getVolume(); $i+=10) { 
					echo "|";
				}
				echo "<br>";
			}
		}
	}
	
	public function play()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			if ($this->getTocando() == true) {
				echo "Já esta Tocando!!<br>";
			} else {
				$this->setTocando(true);
				echo "Tocando...<br>";
			}
		}
	}
	public function pause()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			if ($this->getTocando() == false) {
				echo "Já esta Pausado!!<br>";
			} else {
				$this->setTocando(false);
				echo "Pausando...<br>";
			}
		}
	}
	public function canalMais()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			$this->setCanal($this->getCanal() + 1);
			echo "<p>Agora esta no canal: ".$this->getCanal()."</p>";
		}
	}
	public function canalMenos()
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			$this->setCanal($this->getCanal() - 1);
			echo "<p>Agora esta no canal: ".$this->getCanal()."</p>";
		}
	}
	public function numCanal($x)
	{
		if ($this->getLigada() == false) {
			echo "Desligada, Ligue Primeiro!!<br>";
		} else {
			$this->setCanal($x);
			echo "<p>Agora esta no canal: ".$this->getCanal()."</p>";
		}
	}
}



 ?>
