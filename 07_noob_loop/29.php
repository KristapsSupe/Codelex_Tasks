<?php

$n = (int) readline("Enter number: ");
$selectType = readline("Select the type: (a/b/c/d) ");

if ($selectType == "a") {
    // triangle up
    for($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
        echo "  ";
    }
    for ($j = 1; $j < $i; $j++) {
        if($j == 1)
            echo " *";
        else
            echo " *";
    }
    for ($j = 1; $j <= $i; $j++) {
        if ($j == $i)
            echo " *";
        else
            echo " *";
    }
        for ($j = $i; $j <= $n; $j++) {
            echo "  ";
        }

        echo PHP_EOL;
    }
}

if ($selectType == "b") {
    // triangle down
    for($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "  ";
        }
        for ($j = $i; $j < $n; $j++) {
            if($j == $i)
                echo " *";
            else
                echo " *";
        }
        for($j = $i; $j <= $n;  $j++) {
            if ($j == $n)
                echo " *";
            else
                echo " *";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "  ";
        }
        echo PHP_EOL;
    }
}

if ($selectType == "c") {
    for($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            echo "  ";
        }
        for ($j = 1; $j < $i; $j++) {
            if($j == 1)
                echo " *";
            else
                echo " *";
        }
        for ($j = 1; $j <= $i; $j++) {
            if ($j == $i)
                echo " *";
            else
                echo " *";
        }
        for ($j = $i; $j <= $n; $j++) {
            echo "  ";
        }

        echo PHP_EOL;
    }
    for($i = 2; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "  ";
        }
        for ($j = $i; $j < $n; $j++) {
            if($j == $i)
                echo " *";
            else
                echo " *";
        }
        for($j = $i; $j <= $n;  $j++) {
            if ($j == $n)
                echo " *";
            else
                echo " *";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "  ";
        }
        echo PHP_EOL;
    }

}

if ($selectType == "d") {
    for($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            echo " *";
        }
        for ($j = 1; $j < $i; $j++) {
            if($j == 1)
                echo " *";
            else
                echo "  ";
        }
        for ($j = 1; $j <= $i; $j++) {
            if ($j == $i)
                echo " *";
            else
                echo "  ";
        }
        for ($j = $i; $j <= $n; $j++) {
            echo " *";
        }

        echo PHP_EOL;
    }
    for($i = 2; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo " *";
        }
        for ($j = $i; $j < $n; $j++) {
            if($j == $i)
                echo " *";
            else
                echo "  ";
        }
        for($j = $i; $j <= $n;  $j++) {
            if ($j == $n)
                echo " *";
            else
                echo "  ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo " *";
        }
        echo PHP_EOL;
    }

}



