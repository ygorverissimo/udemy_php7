<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<form>
		<!-- sem definir action para o form, o padrão de envio é a própria página
		sem definir method, o padrão é get -->
		<h4>Nome:</h4><input type="text" name="nome">
		<h4>Data de nascimento:</h4><input type="date" name="nascimento">
		<input type="submit" value="OK">
	</form>
	
	<?php
	
		if (isset($_GET))
		{
				
			
		//percorre o array super global $_GET
		//$key é todos os inputs (names) do form, o índice da lista
		//o que foi digitado em cada campo, vai ser atribuído à value
			foreach ($_GET as $key => $value)
			{
				echo "Nome do campo: " . $key . "<br>";
				echo "Valor do campo: " . $value . "<br>";
			
				//hr = escreve uma linha horizontal com os resultados
				echo "<hr>";
			}
		}
	?>
</body>
</html>