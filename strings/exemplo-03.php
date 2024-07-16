<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<!-- também posso fazer o select do lado de fora do php, porém o que está dentro do php vai entrar tudo dentro do select-->
<select>
	<?php
	
		//echo "<select>";
	
		//laço dos últimos 100 anos, iniciando no ano atual ( date ("Y"), roda o laço de ano atual - 100 até i for maior que 100 anos atrás)
		for ($i=date("Y"); $i > date("Y")-100; $i--)
		{
			//cria uma lista (option value) com o valor de cada linha (value) com i e o texto (valor entre <option value = "x"> </option> ) com o valor de i também
			echo '<option value = "' .$i. '">' .$i. '</option>';
		}
	
		//echo "</select>";
	
	?>
</select>
</body>
</html>