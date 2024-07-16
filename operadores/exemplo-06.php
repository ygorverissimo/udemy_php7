<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
		//operador para comparar se valores são nulos ou não
		
		$a = NULL;
		$b = 8;
		$c = 10;
	
		//se a for nulo, mostre b. se b também for nulo, mostre c.
		echo $a ?? $b ?? $c;
	
	?>
</body>
</html>