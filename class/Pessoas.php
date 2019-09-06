<?php 

/**
 * 
 */
abstract class Pessoas
{
	protected $nome, $sexo, $idade, $experiencia;

	function __construct($nome, $idade, $sexo)
	{
		$this->setNome($nome);
		$this->setIdade($idade);
		$this->setSexo($sexo);
		$this->experiencia = 0;
	}

	public function getNome()
	{
		return $this->nome;
	}
	public function getSexo()
	{
		return $this->sexo;
	}
	public function getIdade()
	{
		return $this->idade;
	}
	public function getExperiencia()
	{
		return $this->experiencia;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function setIdade($idade)
	{
		$this->idade = $idade;
	}
	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}
	public function setExperiencia($experiencia)
	{
		$this->experiencia = $experiencia;
	}
	public function ganharExperiencia($n)
	{
		$this->experiencia += $n;
	}
}

?>