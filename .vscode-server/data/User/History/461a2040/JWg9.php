nes (7 sloc)  187 Bytes

<?php
	$arr = ['green' => 'зеленый', 
		'red' => 'красный','blue' => 'голубой']; 
        foreach ($arr as $key => $elem) {
    echo $key.' - '.$elem.'<br>';
    }
?>