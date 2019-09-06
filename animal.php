<?php 
//require_once 'class/Animal.php';
require_once 'class/Mamifero.php';
require_once 'class/Reptil.php';
require_once 'class/Peixe.php';
require_once 'class/Ave.php';


$mam = new Mamifero("Rex", 7, 4);
$rep = new Reptil("Loaldo", 5, 0);
$peixe = new Peixe("Nemo", 1, 0);
$ave = new Ave("Piu Piu", 3, 2);

$mam->setCorPelo("Marrom");
$rep->setCorEscama("Vermelho");
$peixe->setCorEscama("Laranja");
$ave->setCorPena("Branca");

$peixe->soltarBolha();
echo "<pre>";
	print_r($mam);
	print_r($rep);
	print_r($peixe);
	print_r($ave);
echo "</pre>";
?>