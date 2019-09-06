<?php 
require_once 'class/Pessoa.php';
require_once 'class/Funcionario.php';
require_once 'class/Professor.php';
require_once 'class/Aluno.php';


$p1 = new Pessoa("Pedro", 22);
$p2 = new Funcionario("João", 44);
$p3 = new Professor("Maria", 40);
$p4 = new Aluno("José", 15);

$p1->setSexo("M");
$p3->setSexo("F");
$p3->setSalario(2500);
$p3->recebAumento(100.55);
//$p3->mudarTrab();
echo "<pre>";
	print_r($p3);
echo "</pre>";
?>