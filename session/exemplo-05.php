<?php

require_once('config.php');

//a função session_save_path() retorna o caminho onde as sessões são armazenadas
echo session_save_path();
echo "<br>";

/*a função session_status() retorna o status da sessão
se as sessões estiverem desabilitadas, retorna 0
se a sessão estiver habilitada mas nenhuma existir, retorna 1
caso a sessão esteja ativa, retorna o valor 2
*/
var_dump(session_status());

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas";
        break;
    case PHP_SESSION_NONE:
        echo "As sessões estão habilitadas, mas nenhuma existe";
        break;
    case PHP_SESSION_ACTIVE:
        echo "As sessões estão habilitadas, e uma existe";
        break;
}