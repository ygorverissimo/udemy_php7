<?php
//criando uma função que retorna o salário mínimo
function salario(){
    return 1320.00;
}

//exemplo em que Ygor recebe 9,5 salários mínimos
//o echo apresenta uma string concatenado à função salario multiplicado por 9,5
echo "Ygor recebeu 9,5 salários: " . (salario()*9.5);