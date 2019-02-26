<?php
//include "inc/ex1.php"; daria acesso a uma função inc 
//que podem ocasionar problemas


require_once "inc/ex1.php"; // é uma boa prática,pois obriga que o arquivo requerido esteja correto
//evita tambem que o arquivo seja chamado duas vezes
//require_once evita que o arquivo repetido seja lido ocultando o erro.
$resultado = somar(10,20);

echo $resultado;



?>