<?php 

/**
 * 
 */
abstract class Animal
{
	
	protected $nome, $idade, $membros;

	function __construct($nome, $idade, $membros)
	{
		$this->setnome($nome);
		$this->setIdade($idade);
		$this->setMembros($membros);
	}
	abstract function locomover();
	abstract function alimentar();
	abstract function emitirSom();
	
	public function getNome()
	{
		return $this->nome;	
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function getIdade()
	{
		return $this->idade;
	}
	public function setIdade($idade)
	{
		$this->idade = $idade;
	}
	public function getMembros()
	{
		return $this->membros;
	}
	public function setMembros($membros)
	{
		$this->membros = $membros;
	}
}

?>
