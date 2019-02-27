<?php

$json ='[{"nome":"joao","idade":20},{"nome":"Glaucio","idade":25}]'; 

$data =json_decode($json,true);
//transforma json em array ,se não tivesse o true iria converter o json em objeto
var_dump($data);



?>