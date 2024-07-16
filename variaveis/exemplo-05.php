<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
		
		$nome = "Ygor";
	
		function teste()
		{
			//chama a variável da página como global para ser utilizada nessa função, para que o que for definido aqui seja exportado para a main
			global $nome;
			echo $nome;
		}
	
		function teste2()
		{
			//sem o global, você cria uma nova variável apartada, dentro dessa função, mesmo tendo o mesmo nome
			$nome = " Yvan";
			echo $nome . " agora no teste 2";
		}
	
		function setMessage()
		{	
			//criando uma variável global DENTRO da função, para ser usada na main
			global $message;
			$message = "Olá mundo!";
		}
	
	//chamando função
	teste();
	teste2();
	setMessage();
	
	echo $message;
	
	?>
	
</body>
</html>