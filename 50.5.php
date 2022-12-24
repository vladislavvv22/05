<?php
$arr=['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    foreach ($arr as $elem) {
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
            echo '<strong>Суббота</strong> <br>';
        }
        else if ($elem == 'Воскресенье'){
            echo '<strong>Воскресенье</strong>';
        }
    }