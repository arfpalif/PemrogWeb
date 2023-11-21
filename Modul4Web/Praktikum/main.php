<?php

function generator($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "\n HelloWorld" . PHP_EOL;
        } elseif ($i % 3 == 0) {
            echo "\n Hello" . PHP_EOL;
        } elseif ($i % 5 == 0) {
            echo "\n World" . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    }
}

generator(15);

?>
