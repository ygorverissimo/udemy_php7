<?php

//é possível forçar o php a criar uma nova sessão com a função session_regenerate_id()

//para utilizar um session_id() existente, basta usar a função session_id() com os dados da sessão desejada dentro dos parênteses
//ex: session_id('id da sessão aqui');

require_once('config.php');

//a função session_regenerate_id() cria uma nova sessão e apaga a antiga, protegendo o usuário de ataques de roubo de sessão
session_regenerate_id();

echo session_id();
echo "<br>";
//o var_dump mostra o conteúdo da variável de sessão (todo o array da sessão)
var_dump($_SESSION);

//existe um hack que rouba o session_id de um usuário e o usa para acessar o sistema com os valores do usuário
//os sites usam a proteção de https para evitar esse tipo de ataque
//uma maneira de evitar esse problema, é utilizar o session_regenerate_id() que cria uma nova sessão e apaga a antiga, assim um hacker não consegue roubar o session_id