<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
	
		//laço de repetição que vai de 0 até 10, incrementando +1 a cada vez que roda o for
		//a ação do for ( entre chaves {} ) é apenas imprimir i + pular uma linha ( <br> )
		// i nesse exemplo é um contador
		// há três condições no for: primeiro o inicial ($i=0), o final ($i<=10) e a terceira condição é o incremento ($i++)
		/*for ($i = 0; $i<= 10; $i++)
		{
			echo $i . "<br>";
		}*/
	
		//exemplo 2, iniciando em 0, incrementando + 5 em cada laço do for, até chegar 1000
		for ($i = 0; $i< 1000; $i+=5)
		{	
			//o if nesse exemplo funciona como um break do laço
			//se o if tem apenas uma instrução, não precisa por chaves
			//continue funciona como um pós break do if, o laço continua após a condição
			if ($i>=200 && $i <=800) continue;
			
			//nesse exemplo, se o $i for igual a 900 em tipo e resultado, ele executa o break
			if ($i === 900) break;
			echo $i . "<br>";
		}
	
	?>
</body>
</html>