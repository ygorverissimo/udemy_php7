<?php

//testando função anônima com variável
//colocando a função anônima dentro de uma variável
//é necessário colocar ; ao final da função

$fn = function($a){
    var_dump($a);
};

$fn('Ola mundo!');

/*
Função anônima: uso para sistemas em php com rotinas
exs:
- passar função como parâmetro
- atribuir função a variável
- não tem nome na função, não tem retorno
*/