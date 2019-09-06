<?php /**
 * 
 */
require_once 'Pessoa.php';
class Funcionario extends Pessoa
{
	//ATRIBUTOS
		private $setor;
		private $trabalhando;
	//METODOS ESPECIAIS
		public function getSetor()
		{
			return $this->setor;
		}
		public function setSetor($setor)
		{
			$this->setor = $setor;
		}
		public function getTrabalhando()
		{
			return $this->trabalhando;
		}
		public function setTrabalhando($trabalhando)
		{
			$this->trabalhando = $trabalhando;
		}
	//METODOS PROPRIOS
		public function mudarTrab()
		{
			$this->trabalhando = ! $this->trabalhando;
		}
}