<?php

$condicao = true;

//o while sempre valida a condição antes de rodar uma vez, diferene do dowhile que roda uma vez pelo menos
//se for usar o while com números, usar contador na condição para não criar loop infinito
while ($condicao) {

    //rand = função nativa do php para sortear valor randomicamente
    $numero = rand(1, 10);

    //se valor sorteado for igual a 3, entra no if
    if ($numero === 3)  {
        echo "TRÊS!";
        $condicao = false;
    }

    //se não for = 3, apresenta o número
    echo $numero . " ";
}

?>