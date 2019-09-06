<?php 
require_once 'class/Pessoa.php';
require_once 'class/Funcionario.php';
require_once 'class/Professor.php';
require_once 'class/Aluno.php';
require_once 'class/Visitante.php';
require_once 'class/Tecnico.php';
require_once 'class/Bolsista.php';


$p1 = new Visitante("Pedro", 22);
$p2 = new Funcionario("João", 44);
$p3 = new Professor("Maria", 40);
$p4 = new Aluno("José", 15);
$p5 = new Tecnico("Paulo", 17);
$p6 = new Bolsista ("Claudio", 16);

$p1->setSexo("M");
$p3->setSexo("F");
$p3->setSalario(2500);
$p3->recebAumento(100.55);

$p5->setRegistro(513011);
$p5->praticar();
$p5->pagarMensalidade();
$p6->setBolsa(150.00);
$p6->pagarMensalidade();
//$p3->mudarTrab();
echo "<pre>";
	print_r($p5);
	print_r($p1);
	print_r($p6);
echo "</pre>";

?>