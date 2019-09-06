<!DOCTYPE html>
<html>
<head>
	<title>Herança P01</title>
</head>
<body>
	<?php  
		require_once "class/Pessoa.php"; 
		require_once "class/Aluno.php"; 
		require_once "class/Visitante.php";
		require_once "class/Bolsista.php";
		require_once "class/Tecnico.php";
		// require_once "class/Tecnico.php"
		//require_once "class/Funcionario.php"; 
		//require_once "class/Professor.php";  

		$p1 = new Aluno();
		$p2 = new Visitante();
		$p3 = new Bolsista();
		$p4 = new Tecnico();
		$p3->setNome("Pedro");
		$p3->pagarMensal();

		/*$p1->setNome("Pedro");
		$p2->setNome("Carlos");
		$p3->setNome("Paulo");
		$p4->setNome("José");
		$p2->setCurso("Php");
		$p4->setSalario(1200.50);
		$p3->setSetor("Estoque");
		$p4->aumentoSalario(1000.00);*/

	?>
	<pre><?=print_r($p1); ?></pre>
	<pre><?=print_r($p2); ?></pre>
	<pre><?=print_r($p3); ?></pre>
	<pre><?=print_r($p4); ?></pre>
</body>
</html>