<?php
    $x = $_GET['v1'];
    $y = $_GET['v2'];
    $act = $_GET['act'];
    if ($act == '+'){
        $z = $x + $y;
    }
    else if ($act == '-'){
        $z = $x - $y;
    }
    else if ($act == '*'){
        $z = $x * $y;
    }
    else if ($act == '/'){
    else if($y = 0){
        if ($y == 0) die('Вы взорвали вселенную')

    }
    echo $x.' '.$act.' '.$y.' = '.$z;
?> 
