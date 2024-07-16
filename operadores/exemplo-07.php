<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
		//operadores incrementais e decrementais
	
		$a = 10;
		
		// ( ++ ) incrementa +1 à variável. nesse caso, mostre a e incremente mais 1
		echo $a++;
		echo "<br>";
	
		//mostre a pós incremento
		echo $a;
		echo "<br>";
	
		// nesse outro caso, incremente mais 1 primeiro e ENTÃO mostre a
		echo ++$a;
		echo "<br>";
	
		//mesma função funciona para decremento ( -- )
	
		//decremente 1 primeiro e ENTÃO mostre a
		echo --$a;
		echo "<br>";
	
	?>
</body>
</html>