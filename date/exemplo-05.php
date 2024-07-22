<?php

$dt = new DateTime();

//atribui à variável $periodo um intervalo de tempo de 15 dias usando o objeto DateInterval, que é usado para guardar um intervalo de tempo
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");
echo "<br>";

//o método add, da classe DateTime, adiciona um intervalo de tempo à data
//o método add recebe um objeto DateInterval como parâmetro
//como esse intervalo de tempo já foi atribuído à variável $periodo, podemos apenas chamá-la
$dt->add($periodo);
//podemos atribuir o DateInterval diretamente no parâmetro do método add se quisermos também
//exemplo: $dt->add(new DateInterval("P15D"));

echo $dt->format("d/m/Y H:i:s");
