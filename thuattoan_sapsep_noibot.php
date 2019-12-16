<?php
    $myArr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
    $count = count($myArr);
    $temp = 0;
    for($i = 0; $i < $count; $i++) {
        for($j = $i+1; $j < $count; $j++) {
            if($myArr[$j] < $myArr[$i]) {
                $temp = $myArr[$j];
                $myArr[$j] = $myArr[$i];
                $myArr[$i] = $temp;
            }
        }
    }

    for($i=0;$i<$count;$i++) {
        echo $myArr[$i]." ";
    }