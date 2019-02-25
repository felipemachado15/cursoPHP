<?php
//padrão carmelCase
//palavras composta primeira letra palavra minuscula e o restante das outras maiuscula
$anoNascimento = 1950;
$nomeCompleto = "";
$sobrenome = "Rangel";
//$1nome; = nao pode iniciar com numero
$_nome = "Hcode" ;//_ unico caracter permitido declaração de variavel

$nome1 = "Joao";
echo "<br/>";
var_dump($nome1);
//unset($nome1); // Exclui a variavel ou seja tira da memoria
var_dump($nome1);

if(isset($nome1)){ // verifica se o nome foi definido
    echo $nome1 ." "//. indica a contaternação
    .$sobrenome.
        " nome  foi definido";
}else{
    echo "nome não definido";
}

?>