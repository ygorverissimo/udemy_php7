<?php

//chamando página config.php que inicia a sessão
require_once('config.php');

//session_start();


//para apagar variáveis de sessão, basta usar a função unset()
//ex: unset($_SESSION['nome']); apaga a variável de sessão nome

//paga apagar todas as variáveis de sessão, basta usar a função session_destroy()
//a diferença entre unset() e session_destroy() é que unset() apaga apenas uma variável de sessão mas o usuário continua existindo, enquanto session_destroy() apaga todas as variáveis de sessão e o usuário é "destruído"

//ao criar uma nova sessão com o exemplo-01.php, o nome Ygor é armazenado na variável $_SESSION['nome']
//consigo então apresentar o nome armazenado na variável $_SESSION['nome'], se abrir o exemplo-02.php na mesma sessão
echo $_SESSION['nome'];