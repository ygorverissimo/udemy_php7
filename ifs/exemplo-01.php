<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
	
	$qualASuaIdade = 32;
	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;
	
		//se condição é atendida, faça algo
		if ($qualASuaIdade < $idadeCrianca)
		{
			echo "Criança";
		}
	
		elseif ($qualASuaIdade < $idadeMaior)
		{
			echo "Adolescente";
		}
	
		elseif ($qualASuaIdade < $idadeMelhor)
		{
			echo "Adulto";
		}
	
		else
		{
			echo "Idoso";
		}
	
	
	echo "<br>";
	
	//operador ternário (if de uma linha só), faz comparação entre duas variáveis e retorna valor
	//se idade menor que idade menor, ent]ão ( ? ) resultado menor de idade, senão ( : ) maior de idade
	echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";
	
	?>
</body>
</html>