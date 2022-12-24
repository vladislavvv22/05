<?php
	$arr = [1, 2, 3, 4, 5, 6, 0, 7, 8, 9];
	
	foreach ($arr as $elem) {
		if ($elem == 0) {
			break;
		}
        else {
            echo $elem.'<br>';
        }
	}
?>