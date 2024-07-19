<?php

$a = 10;

function trocaValor(&$a){
    $a += 50;
    return $a;
}

//variável é uma coisa e parâmetro de função é outra
//variável $a é uma variável global, e o parâmetro $a da função trocaValor é uma variável local
echo trocaValor($a);
echo "<br>";
echo $a;

//passagem de parâmetro por referência é quando passamos o endereço de memória da variável para a função
//a partir daí, a função pode alterar o valor da variável que está fora da função
//sabemos que há uma passagem de parâmetro por referência quando usamos o & antes do parâmetro da função


/*se não houvesse o &, o valor de $a seria alterado apenas localmente (na função), mas não seria alterado o valor da variável $a que está fora da função
    * a variável $a dentro da função trocaValor seria uma CÓPIA da variável $a que está fora da função
    * ou seja, a variável $a dentro da função trocaValor não seria a mesma variável $a que está fora da função
    * assim, a variável $a dentro da função trocaValor será uma variável local, e o que acontece dentro da função não afetará a variável $a que está fora da função
*/

/*
a diferença entre variável global e parâmetro por referência é que a variável global é enxergada em qualquer parte do código, enquanto o parâmetro por referência só é enxergado dentro da função
*/