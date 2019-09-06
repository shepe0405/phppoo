<?php 

require_once 'class/Video.php';
require_once 'class/Gafanhoto.php';
require_once 'class/Visualizacao.php';

$videos[0] = new Video("Titulo 01");
$videos[1] = new Video("Titulo 02");
$videos[2] = new Video("Titulo 03");
$videos[3] = new Video("Titulo 04");

$aluno[0] = new Gafanhoto("Pedro", 23, "M", "pedro.ferreira");

$vis[0] = new Visualizacao($aluno[0], $videos[2]);
$vis[1] = new Visualizacao($aluno[0], $videos[0]);
$vis[0]->avaliar();
$vis[1]->avaliarPorc(85);
echo "<pre>";
	//print_r($videos);
	//print_r($aluno);
	print_r($vis);
echo "</pre>";



?>