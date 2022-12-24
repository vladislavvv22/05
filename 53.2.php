<?php
	$arr = [1, 2, 3, 4, 5, 6, -1, 7, 8, 9];
    $z = 0;
	
	foreach ($arr as $elem) {
		if ($elem < 0) {
			break;
		}
        else {
            $z = $z + $elem;
        }
	}
    echo $z.' ';
?>