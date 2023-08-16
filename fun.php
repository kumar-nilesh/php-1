<?php
    $height = intVal($_POST['h']);
    $width = intVal($_POST['w']);

    function area($x,$y){
        $area = $x * $y ;
        echo "<h1>This rectangle is ".$x." inches high and ".$y." inches wide and has an area of ".$area." square inches.</h1>";
    }

    area($height,$width);

?>