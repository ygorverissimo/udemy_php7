<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
		
		$meses = array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho",
		"Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
	
		//roda o array (lista) e a cada item que ele encontrar, ele cria uma variável nova ($mes)
		//o direcionador para criar cada item é o index, o índice de itens na lista
		foreach ($meses as $index => $mes)
		{
			//apresenta cada númeração (índice) dos itens da lista
			echo "Índice: " . $index . "<br>";
			//apresenta cada nova variável ($mes) criada ao percorrer o array (lista)
			echo "O mês é " . $mes . "<br>";
		}
	?>
</body>
</html>