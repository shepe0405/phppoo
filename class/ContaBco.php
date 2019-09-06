<?php 

class ContaBco
{
	private $numConta;
	private $agencia;
	private $dono;
	private $saldo;
	private $tipo;
	private $status;
	

	//ESPECIAIS
	function __construct($tipo, $dono)
	{

		$this->setTipo($tipo);
		$this->setDono($dono);
		$this->setStatus(false);
		$this->setSaldo(0);
		$this->setNumConta();
		$this->setAgencia();
		echo "Conta Criada<br>";

	}

	public function getNumConta(){
		return $this->numConta;
	}
	public function getAgencia(){
		return $this->agencia;
	}
	public function getDono(){
		return $this->dono;
	}
	public function getSaldo(){
		return $this->saldo;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function getStatus(){
		return $this->status;
	}

	public function setNumConta(){
		for ($i=0; $i <=1; $i++) { 
			$num = mt_rand(0,9);
			$num2 = mt_rand(0,9);
			$num3= mt_rand(0,9);
			$num4 = mt_rand(0,9);
			$num5 = mt_rand(0,9);
		}
		$this->numConta = $num.$num2.$num3.$num4."-".$num5;
	}
	public function setAgencia(){
		for ($i=0; $i <=1 ; $i++) { 
			$num = mt_rand(0,9);
			$num2 = mt_rand(0,9);
			$num3= mt_rand(0,9);
			$num4 = mt_rand(0,9);
		}
		$this->agencia = $num.$num2.$num3.$num4;
	}
	public function setDono($x){
		$this->dono = $x;
	}
	public function setSaldo($x){
		$this->saldo = $x;
	}
	public function setTipo($x){
		$this->tipo = $x;
	}
	public function setStatus($x){
		$this->status = $x;
	}

	//METODOS CLASSE
	public function abrir(){
		if ($this->getStatus(false)) {
			$this->setStatus(true);
			if ($this->getStatus() == "CC") {
				$this->setSaldo($this->getSaldo() + 120);
			} else {
				$this->setSaldo($this->getSaldo() + 50);
			}
		} else {
			echo "Conta já Aberta<br>";
		}
	}
	public function fechar(){
		if ($this->getStatus(true)) {
			if ($this->getSaldo() == 0) {
				$this->setStatus(false);
			} else {
				echo "Verifique sua situação.<br>";
				echo "Impossível realizar operação!!!<br>";
			}
		} else {
			echo "Conta já esta fechada<br>";
		}
	}
	public function sacar($x){
		if ($this->getStatus(true)) {
			if ($this->getSaldo() > 0) {
				$this->setSaldo($this->getSaldo() - $x);
			} else {
				echo "Realizando saque de R$ ".$x." ...<br>";
				echo "Saldo Insuficiente!!!<br>";
				echo "Saldo atual de R$ ".$this->getSaldo();
			}
		} else {
			echo "Conta fechada. Impossível realizar operação!!!<br>";
		}
	}
	public function depositar($x){
		if ($this->getStatus(true)) {
			echo "Realizando Depósito de R$".$x." ...<br>";
			$this->setSaldo($this->getSaldo() + $x);
			echo "Saldo atual de R$ ".$this->getSaldo()."<br>";
		} else {
			echo "Conta Fechada<br>";
		}
	}
	public function pgMensal(){
		$valor = ($this->getTipo() == "CC") ? 20 : 10;
		if ($this->getStatus(true)) {
			$this->setSaldo($this->getSaldo() - $valor);
		} else {
			echo "Conta está fechada!!!<br>";
		}
	}
}
?>
