<?php 
    $height = 4;
    $width = 5;

    function area($x,$y){
        $area = $x * $y ;
        echo "This rectangle is ".$x." inches high and ".$y." inches wide and has an area of ".$area." square inches.";
    }

    area(6,4);
?>