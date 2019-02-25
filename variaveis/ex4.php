<?php

//$nome = $_GET["a"];//valor retirado pela url ou tambem chamada de global
//todo valor populado por metodo GET é String

//se quiser converter um valor usamos um casting como o código abaixo

$nome = (int)$_GET["a"];//casting
//var_dump($nome);
$ip = $_SERVER["SCRIPT_NAME"];//mostrar caminho das pastas

echo $ip;


?>