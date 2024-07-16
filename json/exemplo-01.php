
<?php

//array principal
$pessoas = array();

//primeiro item no array (index 0)
array_push($pessoas, array(
    'nome' => 'Ygor',
    'idade' => '32'
));

//segundo item no array (index 1)
array_push($pessoas, array(
    'nome' => 'João',
    'idade' => '50'
));

//apresenta o array pessoas em formato json
echo json_encode($pessoas);