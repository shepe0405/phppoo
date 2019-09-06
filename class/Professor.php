<?php /**
 * 
 */
require_once 'Pessoa.php';
class Professor extends Pessoa
{
	//ATRIBUTOS
		private $especialidade;
		private $salario;

	//METODOS ESPECIAIS
		public function getEspec()
		{
			return $this->especialidade();
		}
		public function setEspec($especialidade)
		{
			$this->especialidade = $especialidade;
		}
		public function getSalario()
		{
			return $this->salario;
		}
		public function setSalario($salario)
		{
			$this->salario = $salario;
		}
	//METODOS PROPRIOS
		public function recebAumento($aum)
		{
			$this->salario += $aum;
			echo "O professor ".$this->getNome()." recebeu um aumento de R$: ".number_format($aum, 2, ",", ".") ." mudando o seu salário para R$: ".number_format($this->getSalario(), 2, ",", ".").".<br>";
		}
		
} 