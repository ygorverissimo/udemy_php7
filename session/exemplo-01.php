<?php

//chamando página config.php que inicia a sessão
require_once('config.php');

//session_start(); é uma função que inicia uma sessão (PHP não inicia automaticamente uma sessão)
//session_start();

/*toda página que utiliza sessão deve iniciar com session_start()
*é possível alterar o servidor com o parâmetro session_auto_start() do arquivo php.ini, mas isso não é padrão
por via de regra, é interessante criar uma session_start() em cada página que utilizar sessão
uma alternativa é criar uma página php de configuração que inicia a sessão e inclui a configuração em todas as outras páginas
*/

//$_SESSION é um array superglobal que armazena dados da sessão
$_SESSION['nome'] = 'Ygor';