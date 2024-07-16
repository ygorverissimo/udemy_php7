<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
		//precedência de operadores (quais são executados primeiro)
	
		$resultado = 10 + 3 / 2;
	
		//primeiro executa a divisão e depois soma
		echo $resultado;
		echo "<br>";
	
		//preciso especificamente que execute uma parte primeiro, coloque entre parênteses
		$resultado2 = (10 + 3) / 2;
		echo $resultado2;
		echo "<br>";
	
		//operador ( && ) preciso que duas condições sejam atendidas
		$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 5;
		var_dump($resultado3); //retorna comparação
		echo "<br>";
	
		//operador ( || ) preciso que apenas uma das condições sejam atendidas
		$resultado4 = (10 + 3) / 2 > 5 || 10 + 5 < 5;
		var_dump($resultado4); //retorna comparação
		echo "<br>";
		
	?>
</body>
</html>