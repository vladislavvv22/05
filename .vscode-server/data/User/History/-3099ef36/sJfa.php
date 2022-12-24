<?php
    $x = $_GET['v1'];
    $y = $_GET['v2'];
    $act = $_GET['act'];
    if ($act == '+'){
        $z = $x + $y;
    }
    if ($act == '-'){
        $z = $x - $y;
    }
    if ($act == '*'){
        $z = $x * $y;
    }
    if ($act == '/'){
        $z = $x / $y;
        else
    $z = 'Вы взорвали вселенную'
    }
    echo $x.' '.$act.' '.$y.' = '.$z;
?> 
