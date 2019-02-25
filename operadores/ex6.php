<?php
$a = NULL;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c ;//Se a for nulo mostre b,se b for nulo mostre c
//o primeiro numero que nao for nulo ignora o restante

?>