<?php

function ola_subrotina(){
    //se não houver um return, não será uma função e sim uma sub-rotina
    //uma sub-rotina não retorna nada, apenas executa o que está dentro dela
    //ex:
    echo "Olá Mundo!<br>";
    //return "Olá Mundo!<br>";
}

function ola_funcao(){
    //uma função retorna um valor
    //ex:
    return "Olá Mundo!<br>";
    //nesse caso o return retorna uma string
}

//como o retorno é uma string, posso usar o echo para apresentar o retorno da função
echo ola_funcao();

/*é interessante usar um return ao invés de apenas um echo (como no ola_subrotina) para que se tenha um código inteligente
ou seja, um código abstrato que se encaixe em diversas situações
por exemplo utilizar a string que retorna a função ola_funcao dentro de um banco de dados
o return permite que se utilize o que a função retorna para outras funções, enquanto a sub-rotina se limita apenas ao que ela executa e fim
*/

//um exemplo de uso do retorno da função ola_funcao é o seguinte:
//posso atribuir o retorno da função ola_funcao a uma variável
$frase = ola_funcao();

//e então usar a variável $frase para apresentar o tamanho da string
echo strlen($frase);