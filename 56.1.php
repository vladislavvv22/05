<?php
    $num = 31;

    $flag = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $flag = false;
            break; // выйдем из цикла
        }
    }

    var_dump($flag);
?>