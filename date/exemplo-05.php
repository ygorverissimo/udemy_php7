<?php

$dt = new DateTime();

//atribui a periodo um intervalo de tempo de 15 dias
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");
echo "<br>";

//o método add, da classe DateTime, adiciona um intervalo de tempo à data
//o método add recebe um objeto DateInterval como parâmetro, que guarda um intervalo de tempo
$dt->add($periodo);
//podemos atribuir o DateInterval diretamente no parâmetro do método add se quisermos também
//exemplo: $dt->add(new DateInterval("P15D"));

echo $dt->format("d/m/Y H:i:s");
