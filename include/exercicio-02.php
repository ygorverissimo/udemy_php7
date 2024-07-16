<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
	
		//include "inc/exercicio-01.php";//inclui uma classe, seus atibutos, funções, da pasta inc
		//include tenta puxar os atributos mesmo com erro na classe chamada
	
		//chama a classe mãe a partir da pasta de onde está a página chamando a função, no caso inc/ já encontra o arquivo, se estivesse em pasta mais para cima, [pasta]/inc/arquivo.php e por aí vai
		//prestar atenção com erros com include, podem ser na classe mãe
		
		require("inc/exercicio-01.php");
		//require exige que o arquivo sendo chamado exista e está funcionando e sem erros, senão dá erro fatal
	
		require_once("inc/exercicio-01.php");
		//puxa função apenas uma vez, para evitar duplicidade caso a mesma função esteja dentro de vários arquivos chamados
		
	
		$resultado = somar (10,20);
	
		echo $resultado;
	
	?>
	
</body>
</html>