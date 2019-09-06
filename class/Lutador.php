<?php 
/**
 * 
 */
class Lutador
{
	private $nome;
	private $apelido;
	private $idade;
	private $pais;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;


	//METODOS
		//ESPECIAIS
	function __construct($nome, $apelido, $idade, $pais, $altura, $peso, $vitorias, $derrotas, $empates)
	{
		$this->setNome($nome);
		$this->setApelido($apelido);
		$this->setIdade($idade);
		$this->setPais($pais);
		$this->setAltura($altura);
		$this->setPeso($peso);
		$this->setVitorias($vitorias);
		$this->setDerrotas($derrotas);
		$this->setEmpates($empates);

	}
	public function getNome()
	{
		return $this->nome;
	}
	public function SetNome($nome)
	{
		$this->nome = $nome;
	}
	public function getApelido()
	{
		return $this->apelido;
	}
	public function setApelido($apelido)
	{
		$this->apelido = $apelido;
	}
	public function getIdade()
	{
		return $this->idade;
	}
	public function setIdade($idade)
	{
		$this->idade = $idade;
	}
	public function getPais()
	{
		return $this->pais;
	}
	public function setPais($pais)
	{
		$this->pais = $pais;
	}
	public function getAltura()
	{
		return $this->altura;
	}
	public function setAltura($altura)
	{
		$this->altura = $altura;
	}
	public function getPeso()
	{
		return $this->peso;
	}
	public function setPeso($peso)
	{
		$this->peso = $peso;
		$this->setCategoria();
	}
	public function getCategoria()
	{
		return $this->categoria;
	}
	public function setCategoria()
	{
		if ($this->getPeso() < 68) {
			echo "<p>Lutador não se enquadra em nenhuma categoria!!!</p>";
		} elseif ($this->getPeso() <= 78) {
			$this->categoria = "Leve";
		} elseif ($this->getPeso() <= 89) {
			$this->categoria = "Médio";
		} elseif ($this->getPeso() <= 105) {
			$this->categoria = "Pesado";
		} else {
			echo "<p>Lutador não se enquadra em nenhuma categoria!!!</p>";
		}
		
	}
	public function getViotorias()
	{
		return $this->vitorias;
	}
	public function setVitorias($vitorias)
	{
		$this->vitorias = $vitorias;
	}
	public function getDerrotas()
	{
		return $this->derrotas;
	}
	public function setDerrotas($derrotas)
	{
		$this->derrotas = $derrotas;
	}
	public function getEmpates()
	{
		return $this->empates;
	}
	public function setEmpates($empates)
	{
		$this->empates = $empates;
	}
	//PROPRIOS
	public function apresentar()
	{
		echo "<p>Vem ai...</p>";
		echo "<p>O lutador: ".$this->getNome()." '".$this->getApelido()."', diretamente do(a) ".$this->getPais()."</p>";
		echo "<p>Pesando: ".number_format($this->getPeso(), 2)." Kg e medindo ".number_format($this->getAltura(), 2)." m, aos ".$this->getIdade()." anos...</p>";
		echo "<p>Com um histórico de...</p>";
		echo "<p>Vitorias: ".$this->getViotorias()."</p>";
		echo "<p>Empates: ".$this->getEmpates()."</p>";
		echo "<p>Derrotas: ".$this->getDerrotas()."</p>";
	}
	public function Status()
	{
		echo "<p>".$this->getNome()." '".$this->getApelido()."'</p>";
		echo "<p>".$this->getViotorias()." Vitorias</p>";
		echo "<p>".$this->getEmpates()." Empates</p>";
		echo "<p>".$this->getDerrotas()." Derrotas</p>";
	}
	public function ganharLuta()
	{
		$this->setVitorias($this->getViotorias() + 1);
	}
	public function perderLuta()
	{
		$this->setDerrotas($this->getDerrotas() + 1);
	}
	public function empatarLuta()
	{
		$this->setEmpates($this->getEmpates() + 1);
	}
	public function perderPeso($x)
	{
		$this->setPeso($this->getPeso() - $x);
	}
	public function ganharPeso($x)
	{
		$this->setPeso($this->getPeso() + $x);
	}
}



?>