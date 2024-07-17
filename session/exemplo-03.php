<?php

require_once('config.php');

echo session_id();

//o valor do session_id() é um identificador único para cada sessão
//o servidor cria um arquivo de texto com o valor do session_id() por um tempo determinado