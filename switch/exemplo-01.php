<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
		
		//date é uma função nativa do PHP para retornar data
		$diaDaSemana = date("w");
	
		//cria o switch para validar uma lista de alternativas
		switch($diaDaSemana)
		{
			//case = caso o resultado seja este determinado, faça algo
			case 0: echo "Domingo";
			break;
				
			case 1: echo "Segunda-feira";
			break;
				
			case 2: echo "Terça-feira";
			break;
				
			case 3: echo "Quarta-feira";
			break;
				
			case 4: echo "Quinta-feira";
			break;
				
			case 5: echo "Sexta-feira";
			break;
				
			case 6: echo "Sábado";
			break;
				
			//caso nenhuma das alternativas seja atendida, ele quebra o switch com o default
			default: echo "Data inválida";
			break;
				
		}
	
	?>
</body>
</html>