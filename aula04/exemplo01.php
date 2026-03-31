<?php

    $json_str = '{"nome":"Jason Jones", "idade":38, "sexo":"M"}';

    //Parsing de string é o processo de converter um dado textual (string) em outro tipo de dado 
    $obj = json_decode($json_str);

    echo "<prev>";
    var_dump($obj);
    echo "</prev>";
    
    echo "<hr>";

    echo "nome: $obj->nome<br>";
    echo "idade: $obj->idade<br>";
    echo "sexo: $obj->sexo<br>";   

?>