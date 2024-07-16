<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exemplo 2</title>
</head>

<body>
	<?php
	//exemplo usando camelCase
	$anoNascimento = 1992;
	$nome = "Ygor";
	$sobrenome = "Veríssimo";
	
	//concatenando variáveis (juntando) e usando espaço para separá-las. o ponto une variáveis
	$nomeCompleto = $nome . " " . $sobrenome;
	
	/*ex variável com número (só pode após a primeira letra do nome da variável)*/
	$nome1 = "Amanda";
	
	echo $anoNascimento;
	echo "<br/>";
	echo $nomeCompleto;
	
	//limpa (exclui) a variável para ser reutilizada novamente
	unset($anoNascimento, $nome);
	$anoNascimento = 1982;
	
	//if is set = se a variável está setada, ou seja, possui valor, então faça o que está entre chaves.
if	(isset($anoNascimento))
	{	
		echo "<br/><br/>";
		echo "Entrei aqui.";
		echo "<br/>";
		echo $anoNascimento;
	}
?>
	
</body>
</html>