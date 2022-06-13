<?php
/**Write a program called coza-loza-woza.php which prints the numbers 1 to 110,
 * 11 numbers per line.
 * "Coza" in place of the numbers which are multiples of 3,
 * "Loza" for multiples of 5,
 * "Woza" for multiples of 7,*/


for ($i=1; $i <= 110; $i++) {

    if ($i % 3==0 & $i % 5==0) {
        echo " CozaLoza ";

    }elseif ($i % 3==0){
        echo " Coza ";

    }elseif ($i % 5==0){
        echo " Loza ";

    }elseif ($i % 7==0){
        echo " Woza ";
    }else{
        echo $i . " ";
    }
        if ($i % 11==0){
            echo "<br> ";
    }
}

// nospiedu no ineta