<?php

//os ...  são usados para indicar que o parâmetro é variável, com isso, a função pode receber um número indefinido de parâmetros
//isso se chama declaração de tipos escalares
function soma(int ...$valores){
    //o array_sum() soma os valores de um array
    return array_sum($valores);
}
//como o ... indica que o parâmetro é variável, podemos passar quantos parâmetros quisermos
echo soma(1,2,3,4,5);
echo "<br>";
echo soma (10, 15, 20, 25, 30);
echo "<br>";
//nesse exemplo, se enviamos parâmetros que não são inteiros como na função, o php considera o número como inteiro antes do ponto decimal
echo soma (2, 3.2, 4, 5.7, 6);
echo "<br>";