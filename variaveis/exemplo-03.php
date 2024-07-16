<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
<body>
	<?php
		
	/* tipos básicos de variáveis
		String = texto
		int = número inteiro
		float = número flutuante (casa decimal)
		boolean = verdadeiro ou falso
	*/
	
	$nome = "Ygor";
	$site = "https://www.linkedin.com/in/ygorverissimo/";
	
	$ano = 1992;
	$salario = 9530.50;
	$bloqueado = false;
	
	//////////////////////
	
	/* tipos compostos de variáveis: array e objeto
	
	Array
	array pode misturar tipos
	*/
	
	$frutas = array("abacaxi", "laranja", "manga");
	
	echo $frutas[0];
	
	/* Objeto 
		sempre usa a palavra new pra definir um novo objeto
	*/
	
	$nascimento = new DateTime();
	echo "<br/>";
	var_dump($nascimento);
	
	//////////////////////
	
	/* Tipos especiais de variáveis
		Resource e null
	*/
	
	//resource
	$arquivo = fopen("exemplo-03.php", "r"); 
	//fopen = file open
	
	echo "<br/>";
	var_dump($arquivo);
	//var dump serve para ver o tipo de dado da variável
	
	
	//null ou nulo
	
	$nulo = NULL;
	
	//diferente do que vazio:
	$vazio = "";
	
	//nulo é ausência de qualquer valor, vazio existe algum valor iniciado e há reserva de espaço na memória
	
	?>
</body>
</html>