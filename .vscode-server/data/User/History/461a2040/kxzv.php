<?php
	$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
    foreach ($arr as $key => $elem) {
        if ($key = 'green'){
            echo $key
        }
        if ($elem = 'зеленый'){
        echo $elem
        }
    }
?>