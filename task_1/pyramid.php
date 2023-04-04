<?php
$num = 5;
for($i = 1; $i <= $num; $i++) {
   
    for($j = 1; $j <= $num - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    
    for($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}

    for($i = 0; $i < $num; $i++) {
        
        for($j = 0; $j < $num - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        
        for($k = 0; $k < 2 * $i + 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>