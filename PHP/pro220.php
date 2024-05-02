<?php
    /*
        Step 10 If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:
    */

    $i = 1;

    while($i <= 100):
        echo "$i ";
        $i+=10;
    endwhile;
?>