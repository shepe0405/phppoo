<?php require_once 'Aluno.php'; 

/**
 * 
 */
class Bolsista extends Aluno
{
	private $bolsa;

	public function getBolsa()
	{
		return $this->bolsa;
	}
	public function setBolsa($bolsa)
	{
		$this->bolsa = $bolsa;
	}
	public function renovarBolsa()
	{
		echo "Renovando a bolsa do Aluno Bolsista ".$this->getNome();
	}
	public function pagarMensalidade()
	{
		echo "Pagando Mensalidade do Aluno Bolsista: ".$this->getNome()." com  desconto de R$:".number_format($this->bolsa, 2, ",", ".")."<br>";
	}
}

?>