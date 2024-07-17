<?php

//exemplo de uma função que recebe um parâmetro, no caso uma string chamada $texto
function ola($texto){
    //aqui usamos o próprio parâmetro $texto dentro da string que será retornada
    return "Olá $texto!<br>";
}

//exemplo de uso da função ola enviando uma string como parâmetro para que ela faça o retorno
echo ola("Mundo");
echo ola("Ygor");
echo ola("Yvan");


//exemplo de uma função em que o parâmetro $texto tem um valor padrão pre-definido (nesse caso Mundo)
function ola2($texto2 = "Mundo"){
    return "Olá $texto2!<br>";
}
//aqui não precisamos enviar um parâmetro para a função ola2, pois ela já tem um valor padrão (Mundo) para o parâmetro $texto2
echo ola2();

//se enviamos um parâmetro para a função ola2, ele irá sobrepor o valor padrão do parâmetro $texto2
echo ola2("Ygor");

//se enviamos uma string vazia para a função ola2, ela irá retornar o paramêtro vazio também
echo ola2("");


//exemplo de uma função que possui múltiplos parâmetros pre-definidos
function ola3($texto3 = "Mundo", $periodo = "Bom dia!"){
    return "Olá $texto3! $periodo<br>";
}
//assim como no ola2, podemos alterar os parâmetros pre-definidos da função ola3, seja o $texto3 ou o $periodo
echo ola3();//aqui chamamos a função ola3 sem enviar nenhum parâmetro, então ela irá usar os parâmetros pre-definidos

//nesses 3 exemplos, alteramos o parâmetro ao chamar a função ola3:
echo ola3("Ygor", "Boa tarde!");
echo ola3("Yvan", "Boa noite!");
echo ola3("", "Boa noite!");
echo ola3("Amanda", "");


//atenção, se uma função não possui parâmetro pre-definido, é necessário enviar um parâmetro para que ela funcione
function ola4($texto4, $periodo2 = "Bom dia!"){
    //o ideal é que os parâmetros pre-definidos venham por último na função e os não definidos venham mais a esquerda
    return "Olá $texto4! $periodo2<br>";
}
echo ola4('Joca');//aqui podemos enviar apenas um parâmetro para a função ola4, pois ela possui um parâmetro pre-definido
//se $texto4 fosse pre-definido antes e $periodo2 não, teríamos que enviar 2 parâmetros para a função ola4, incluindo o próprio parâmetro pre-definido