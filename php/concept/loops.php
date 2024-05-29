<?php
    echo "for loop:" . PHP_EOL;
    for ($i=1; $i <= 3; $i++) {
        echo " $i º iteração" . PHP_EOL;
    }


    echo "\nwhile loop" .  PHP_EOL;
    $i = 1;
    while ($i <= 3) {
        echo " $i º iteração" . PHP_EOL;
        $i++;
    }


    echo "\ndo-while loop" .  PHP_EOL;
    $i = 1;
    do {
        echo " $i º iteração" . PHP_EOL;
        $i++;
    } while ($i <= 3);


    echo "\nforeach loop" .  PHP_EOL;
    $variable = ["a", "b", "c"];
    foreach ($variable as $key => $value) {
        echo $key + 1 . "º iteração - Valor: $value" . PHP_EOL;
    }