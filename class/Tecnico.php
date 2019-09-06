<?php require_once 'Aluno.php'; 

/**
 * 
 */
class Tecnico extends Aluno
{
	private $registro;	
	
	public function getRegistro()
	{
		return $this->registro;
	}
	public function setRegistro($registro)
	{
		$this->registro = $registro;
	}
	public function praticar()
	{
		echo "Aluno Técnico com o registro ".$this->getRegistro()." está praticando.<br>";
	}
}



?>