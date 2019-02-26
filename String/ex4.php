<?php
$frase = "A repetição é mãe da retenção";
$q = strpos($frase,"mãe");// retorna a posição em que a palavra mãe está
$texto = substr($frase,0,$q);//imprima tudo antes da palavra mãe


var_dump($texto);
$texto2 = substr($frase,$q);





?>