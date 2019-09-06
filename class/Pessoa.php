<?php 
/**
 * 
 */
abstract class Pessoa
{
	//ATRIBUTOS
	protected $nome;
	protected $idade;
	protected $sexo;

	//METODO ESPECIAIS
	function __construct($nome, $idade)
	{
		$this->setIdade($idade);
		$this->setNome($nome);
	}
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
	public function getSexo()
	{
		return $this->sexo;
	}
	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}
	//METODOS DA CLASSE
	public final function fazerAnvier()
	{
		$this->idade ++;
	}

}


?>