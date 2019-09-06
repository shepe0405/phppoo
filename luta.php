<?php 
require_once 'class/Lutador.php';
require_once 'class/Luta.php';
require_once 'includes/header.php';
?>
<main>
	<div class="container">
		<?php $lutador = array(0,5);
			$lutador[0] = new Lutador("João", "Muralha", 33, "Brasil", 1.83, 85.6, 10, 3, 5);
			$lutador[1] = new Lutador("Henry", "The French", 30, "França", 1.80, 80, 5, 1, 4);
			$lutador[2] = new Lutador("Juan", "Vega", 28, "Espanha", 1.75, 75, 2, 3, 3);
			$lutador[3] = new Lutador("Garry", "Mate", 31, "Austrália", 1.77, 73, 2, 3, 3);
			$lutador[4] = new Lutador("Marco", "The Roman", 29, "Itália", 1.90, 98.7, 5, 2, 3);
			$lutador[5] = new Lutador("Bruce", "The Batman", 34, "EUA", 1.88, 102.2, 8, 2, 4);

			$fight = new Luta();
			$fight->marcarLuta($lutador[2], $lutador[3], 8);
			$fight->lutar();
			?>
	</div>
	<pre><?php print_r($lutador[2]) ?></pre>
</main>


<?php require_once 'includes/footer.php'; ?>