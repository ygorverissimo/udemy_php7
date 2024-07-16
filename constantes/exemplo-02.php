<?php

//cria uma constante que pode ser usada como parâmetro de acesso ao banco de dados
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
], true); //define que a constante vai ser case insensitive (o default é ser case sensitive)
//não precisa colocar o true, pois é boa prática padronizar constante com letras maiúsculas

print_r(BANCO_DE_DADOS);