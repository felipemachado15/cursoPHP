<?php
$nome = "Hcode";//String

$site = 'www.hcode.com.br';//String

$ano = 1990;//inteiro

$salario = 5500.99;//float

$bloqueado = false;//bollean
////////////////////////////////

$frutas = array ("abacaxi","Laranja",
"manga"); //Array 

echo $frutas[2];
$nascimento = new DateTime();//Objeto
//var_dump($nascimento);
////////////////////////////////////
$arquivo = fopen("ex3.php","r");
//var_dump($arquivo);
//////////////////////////////
$nulo = NULL ; //ausensia de valor
$vazio = ""; //foi iniciada mas não a valor,sendo assim tem espaço na memoria alocada pra tal valor


?>