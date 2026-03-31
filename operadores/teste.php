<?php
    // $a = 10;
    // $b = 5;
    // $soma = $a + $b;
     
    // echo "A soma é: ". $soma;

    // echo "A variável";
    // var_dump($a);
    // echo "<hr>";

    // $n1 = 4;
    // $n2 = 5;
    // $n3 = 6;

    // $media = ($n1 + $n2 + $n3) / 3;

    // if ($media>5) {
    //     echo "APROVADO!";
    //     echo "Sua média é: " . $media;
    // }else {
    //     if ($media<4) {
    //         echo "REPROVADO!";
    //         echo "Sua média é: " . $media;
    //     }else{
    //         echo "RECUPERAÇÃO!";
    //         echo "Sua média é: " . $media;
    //     }
    // }
    
    //  echo "<hr>";

     $dia = 4;
     switch ($dia) {

        case 1:
            echo "DOMINGO";
        break;

        case 2:
            echo "SEGUNDA";
         break;

        case '3':
            echo "TERÇA";
         break;

        case 4:
            echo "QUARTA";
         break;
        
        
        default:
            echo "invalido";
            break;
     }
    
    echo "<hr>";
    $a = 1;

    while ($a <= 10) {
        echo "$a - ";
        $a++;
    }

     echo "<hr>";

    
     echo "<hr>";
    
     $b = 1;
    do {
        echo "$b - ";
        $b++;
    } while ($b <= 10);









?>