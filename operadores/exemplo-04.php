<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
		<?php
	
		//operadores de comparação ( > < = != )
	
		$a = 33; //int
		$b = 55; //int
		$c = 55.0; //float
	
		//retornar se é verdadeiro o resultado
		var_dump($a > $b);
		echo "<br>";
		var_dump($a < $b);
		echo "<br>";
		// um sinal de = apenas atribui valor. dois sinais de igual == compara dois valores se são iguais
	
		var_dump($a == $b);
		echo "<br>";
		var_dump($b == $c);
		echo "<br>";
	
		// três sinais de igual (===) compara se os tipos são iguais
		var_dump($b === $c);
		echo "<br>";
	
		// comparação se valores são diferentes (!=)
		var_dump($b != $c);
		echo "<br>";
			
		// comparação se tipos são diferentes (!==)
		var_dump($b !== $c);
		
	
		?>
</body>
</html>