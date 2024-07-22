<?php

//parâmetro callback é usado para processos lentos que não sabemos quando terminarão
//exemplo ao terminar o processo, o php não sabe quando vai terminar, o callback chama a função e verifica se o processo terminou
function test($callback){
    //processo lento
    $callback();
}
//como test chama uma função anônima, não precisa incluir o nome da função
test(function(){
    echo "Executou!";
});