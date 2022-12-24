<?php
    $num = 1;
    $z = 0;

    while ($num < 1000){
        $num = $num * 3;
        $z = $z + 1;
    }

    echo $num.'<br>';
    echo 'Количество интераций - '.$z;
?>