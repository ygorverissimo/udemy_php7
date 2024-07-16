<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
		
		/*variáveis pré-definidas ou array super globais
		
		*/
		//_GET possui todas as variáveis que recebemos através da URL (método get)
		//a é o valor em String que estamos recebendo
		$nome = $_GET["a"];
		//get por padrão recebe string, mas é possível converter para outros tipos (cast)
		$idade = (int)$_GET["b"];
		var_dump($idade);
	
		$ip = $_SERVER["REMOTE_ADDR"];
		echo "<br/>";
		echo $ip;
	
	
		$log_acesso = $_SERVER["SCRIPT_NAME"];
		echo "<br/>";
		echo $log_acesso;
		
	?>
	
</body>
</html>