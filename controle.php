<?php 
require_once 'class/ContRemoto.php';
require_once 'includes/header.php';
?>
<main>
	<?php $cont001= new ContRemoto;
	$cont001->ligar();
	$cont001->abrirMenu();
	$cont001->fecharMenu();
	$cont001->canalMais();
	$cont001->numCanal(13);
	//$cont001->mudo();
	$cont001->maisVol();
	$cont001->play();


	?>
	<pre><?php print_r($cont001); ?></pre>
</main>

<?php require_once 'includes/footer.php'; ?>