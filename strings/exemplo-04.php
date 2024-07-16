<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
	
		$frase = "A repetição é a mãe da retenção.";
		$palavra = "mãe";
	
		$q = strpos($frase, $palavra);//atribui a posição exata da string palavra na string frase para q
		var_dump($q);//retorna q
		echo "<br>";
	
		$texto = substr($frase, 0, 17);//atribui texto limitado entre dois parâmetros (ex: início no 0 e fim no 17) para $texto
		var_dump($texto);//retorna texto
		echo "<br>";
	
		$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); /*atribui texto a partir de um ponto determinado na variável $q (no caso é 17) + 
		strlen ($palavra): determinar o ponto que você quer iniciar a string, pode ser um número mas no caso está iniciando exatamente após a string palavra +
		strlen ($frase): determinar onde a string deve terminar, ou seja, até o final da string frase*/
		var_dump($texto2);
		echo "<br>";
	
		$name = 'Hcode Treinamentos';
		$replace = 'Cursos';
		
		//novo nome começa do ponto 0 até chegar na letra T, onde a variável acrescenta ( . ) a variável replace
		$new_name = substr($name, 0, strpos($name, 'T')) . $replace;
		echo $new_name;
	
	?>
</body>
</html>