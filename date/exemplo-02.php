<?php

//a função strtotime converte uma string em um timestamp Unix
$ts = strtotime("2001-09-11");
$tsnow = strtotime("now");
$tstomorrow = strtotime("+1 day");
$tsnextweek = strtotime("+1 week");

//o echo está apresentando a data da variável $ts no formato de string
echo date("l, d/m/Y H:i:s", $ts);
echo "<br>";
echo date ("l, d/m/Y H:i:s", $tsnow);
echo "<br>";
echo date("l, d/m/Y H:i:s", $tstomorrow);
echo "<br>";
echo date("l, d/m/Y H:i:s", $tsnextweek);