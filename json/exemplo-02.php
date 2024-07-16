<?php

//criando variável com as informações em json
$json = '[{"nome":"Ygor","idade":"32"},{"nome":"Jo\u00e3o","idade":"50"}]';

//transforma o json existente em um array (true para não virar objeto)
$data = json_decode($json, true);

var_dump($data);