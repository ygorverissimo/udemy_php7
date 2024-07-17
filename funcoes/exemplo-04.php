<?php

function ola(){
    //a variável argumentos recebe func_get_args(), que é uma função que retorna os argumentos passados para a função ola em um array
    $argumentos = func_get_args();

    return $argumentos;
}

var_dump(ola("Bom dia", 10));
/*o resultado será um array com 2 elementos, sendo o primeiro o string "Bom dia" e o segundo o inteiro 10
*esse tipo de função é chamado de função variádica, pois ela pode receber um número variável de argumentos
*o ponto positivo é que podemos passar quantos parâmetros quisermos para a função ola, e dependendo da quantidade de parâmetros que ela recebe, ela toma ações diferentes*/