<?php 
require_once 'Pessoas.php';


/**
 * 
 */
class Gafanhoto extends Pessoas
{
	
	private $login, $totAssistido;

	public function __construct($nome, $idade, $sexo, $login)
	{
		parent:: __construct($nome, $idade, $sexo);
		$this->setLogin($login);
		$this->totAssistido = 0;
	}
	public function getLogin()
	{
		return $this->login;
	}
	public function getTotAssistido()
	{
		return $this->totAssistido;
	}
	public function setLogin($login)
	{
		$this->login = $login;
	}
	public function setTotAssistido($totAssistido)
	{
		$this->totAssistido = $totAssistido;
	}
	public function assistirMaisUm()
	{
		$this->totAssistido ++;	
	}
	
}


?>