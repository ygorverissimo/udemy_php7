<?php

//os dois pontos após o parênteses indica que o retorno da função é uma string
//ou seja, ele converte o parâmetro float de valores que chamou a função e retorna-as como uma string
//essa funcionalidade é muito boa para tratar dados que vêm de um banco de dados, ou comparação de identidades (===)
function soma(float ...$valores):string{
    //o array_sum() soma os valores de um array
    return array_sum($valores);
}
//como o ... indica que o parâmetro é variável, podemos passar quantos parâmetros quisermos
echo var_dump(soma(1,2,3,4,5));
echo "<br>";
echo soma (10, 15, 20, 25, 30);
echo "<br>";
 //nesse exemplo, se enviamos parâmetros que não são inteiros e no parâmetro da função é inteiro, o php considera o número como inteiro antes do ponto decimal
echo var_dump(soma (2, 3.2, 4, 5.7, 6));
echo "<br>";