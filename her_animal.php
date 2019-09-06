<?php 

require_once 'class/Dourado.php';
require_once 'class/Dog.php';
require_once 'class/Canguru.php';
require_once 'class/Arara.php';
require_once 'class/Cobra.php';
require_once 'class/Tartaruga.php';

$peixe = new Dourado("Gold", 1, 0);
$dog = new Dog("Hercules", 10, 4);
$aus = new Canguru("Arthur", 15, 2);
$arara = new Arara("Blue", 2, 2);
$snake = new Cobra("Luz", 4, 0);
$leo = new Tartaruga("Leonardo", 7, 4);

$peixe->setCorEscama("Dourada");
$snake->setCorEscama("Vermeho, Branco e Preto");
$leo->setCorEscama("Verde");
$arara->setCorPena("Azul");
$dog->setCorPelo("Branco e Marrom");
$aus->setCorPelo("Marrom");

$arara->emitirSom();
$aus->locomover();
$leo->locomover();


$dog->reagirIdade(9, 20);

echo "<pre>";
	print_r($peixe);
	print_r($dog);
	print_r($aus);
	print_r($arara);
	print_r($snake);
	print_r($leo);
echo "</pre>";

?>