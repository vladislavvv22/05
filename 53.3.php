<?php
	$arr = [1, 2, 4, 4, 5, 6, 3, 7, 8, 9];
    $z = 1;
	
	foreach ($arr as $elem) {
		if ($elem == 3) {
			break;
		}
        else {
            $z = $z + 1;
        }
	}
    echo $z.' по счету';
?>