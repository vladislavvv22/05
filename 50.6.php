<?php
$arr=['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
$day = 'Понедельник';
    foreach ($arr as $elem) {
        if ( $elem == $day) {
            echo '<i>'.$elem.'</i><br>';
        } else {
            if ($elem == 'Понедельник'){
                echo $elem.'<br>';
            }
            else if ($elem == 'Вторник'){
                echo $elem.'<br>';
            }
            else if ($elem == 'Среда'){
                echo $elem.'<br>';
            }
            else if ($elem == 'Четверг'){
                echo $elem.'<br>';
            }
            else if ($elem == 'Пятница'){
                echo $elem.'<br>';
            }
            else if ($elem == 'Суббота'){
                echo $elem.'<br>';
            }
            else if ($elem == 'Воскресенье'){
                echo $elem;
            }
        }
    }