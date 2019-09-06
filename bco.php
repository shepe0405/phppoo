<?php 
require_once 'class/ContaBco.php';

//O QUE POSSO AZER PARA TESTAR MINHA TEORIA DE PASSAR POR PARAMETRO
//CRIAR UM FORMULARO BÁSICO NESSA PAGINA
	//NESSA PÁGINA EU TIRARIA AS REFERENCIAS A CLASSE DE CONTA
//MANDANDO PARA OUTRA
	//NESSA CHAMO A CONTA E AI FAÇO O PROCESSAMENTO DAS VARIAVEIS DO FORMULARIO
//RETORNANDO NELA MESMA MAS AI O FRONT END
	//DENTRO DO FRONT END ESCREVER AS COISAS
	//TIRAR TODO ESCRITO DA CLASSE - NÃO SEI PQ ME PARECEU SEM SENTIDO ISSO


?>
<html>
<head>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>PDO</title>
</head>
<body>
	<?php 
	$conta1 = new ContaBco("CC", "Pedro");
	$conta1->fechar();

	?>
	<pre><?php print_r($conta1); ?></pre>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
</html>