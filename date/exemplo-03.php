<?php

//a função setlocale define o locale do sistema
//LC_ALL muda o locale para todos os elementos
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//atribui a data atual à variável $horaagora
//o php apenas aceita data com traço, não aceita barra ou ponto
$horaagora = date('d-m-Y');
//a função DateTime::createFromFormat cria um objeto DateTime a partir de uma string, no caso a variável $horaagora que retorna a data atual
$dataatual = DateTime::createFromFormat('d-m-Y', $horaagora);//poderíamos também chamar a classe date diretamente no parâmetro ao invés de usar a variável $horaagora
//a função IntlDateFormatter formata a data no formato desejado, atribuindo a variável $fmt
$fmt = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'America/Sao_Paulo', IntlDateFormatter::GREGORIAN);
//se quisermos retornar parte da data na variável $fmt, basta acrescentar um parâmetro ao final do IntlDateFormatter em string, por exemplo 'YYYY', que retornará o ano
//para usar a classe IntlDateFormatter, é necessário habilitar o intl no php.ini


//strftime retorna a data no formato string, porém essa função está obsoleta no PHP 8.1
echo ucwords(strftime("%A %B"));
echo "<br>";

//aqui apresentamos a data no formato desejado
echo $fmt->format($dataatual);