<?php 
/**
 * 
 */
require_once 'Pessoa.php';
class Aluno extends Pessoa
{
	//ATRIBUTOS
		private $matr;
		private $curso;
	//METODOS ESPECIAIS
		public function getMatr()
		{
			return $this->matr;
		}
		public function setMatr($matr)
		{
			$this->matr = $matr;
		}
		public function getCurso()
		{
			return $this->curso;
		}
		public function setCurso($curso)
		{
			$this->curso = $curso;
		}
	//METODOS PROPRIOS
		public function cancelarMatr()
		{
			echo "Cancelando matricula: ".$this->getMatr()." do aluno ". $this->getNome().".<br>";
		}
		public function pagarMensalidade()
		{
			echo "Pagando Mensalidade do Aluno: ".$this->getNome()."<br>";
		}
}

 ?>