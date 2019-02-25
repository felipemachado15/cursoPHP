<?php

$nome = "Glaucio";
function teste(){// não vair retornar o nome,pois não a encherga
    //quero usar a variavel que não está no escopo da minha função
    //utilizo global
    global $nome;
    echo $nome;
}
function teste2(){
echo "Teste 2 ".$nome; // não vai localizar
//pois é escopo diferente do teste



}

teste();
teste2();


?>