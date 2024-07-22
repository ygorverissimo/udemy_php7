<?php

//classe DateTime é usada para manipular datas e horas e possui mais recursos do que a função date

//usamos a palavra reservada new para criar (instanciar) um objeto DateTime
$dt = new DateTime();

//$dt nesse momento é um objeto DateTime
//format é um método do objeto DateTime, ele funciona igual a função date
echo $dt->format("d/m/Y H:i:s");