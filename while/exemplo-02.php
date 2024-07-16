<?php

$totalVenda = 200;//valor total vendido
$desconto = 0.9;//desconto de 10%

do {
    //toda vez que passar pela condição, dá desconto de 10%, acumulando com o desconto anterior de 10%
    $totalVenda *= $desconto;
} while ($totalVenda > 100);//se o valor total da venda for menor que 100, para de dar desconto
//é importante sempre usar uma condição no do while com números para evitar loop infinito

//do while executa pelo menos uma vez o laço, mesmo a condição do while sendo falsa
echo $totalVenda;

?>