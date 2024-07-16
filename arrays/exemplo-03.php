<?php

//array principal
$pessoas = array();


//array_push é umma função que adiciona um item no final do array
//primeiro item no array (index 0)
array_push($pessoas, array(
    'nome' => 'Ygor',
    'idade' => '32'
));

//segundo item no array (index 1)
array_push($pessoas, array(
    'nome' => 'João',
    'idade' => '50'
));
//apresenta tudo que está dentro do array pessoas
print_r($pessoas);

//apresenta tudo que está no índice 0
print_r($pessoas[0]);

//apresenta quem está no índice 0 do array principal e item nome
print_r($pessoas[0]['nome']);

//função end apresenta a última posição do array
print_r(end($pessoas));
