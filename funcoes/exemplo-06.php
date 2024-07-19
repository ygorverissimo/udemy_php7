<?php


$pessoa = array(
    'nome' => 'Ygor',
    'idade'=> 32
);

//foreach: cria parâmetro $value que recebe o array pessoa e apresenta em tela
//value com & significa que o valor dentro do array está sendo passado por referência
//ou seja, o valor dentro do array será alterado dentro da função
//se tirássemos o &, o valor seria alterado localmente, mas não alteraria o valor do array
foreach ($pessoa as &$value) {
    //esse if funcionará caso haja um valor dentro do array que seja do tipo inteiro
    if (gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';
}

print_r($pessoa);