<?php
    $n = 0;

    for($a = 0; $a < 7; $a++)
    {
        for($b = 0; $b < 7; $b++)
        {
            if($n == $b || $b == (6-$n)){
                echo '0';
            }else{
                echo '*';
            }   
        }
        $n++;
        echo '<br/>';
    }
?>