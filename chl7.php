<?php 
    $city = array("Tokyo", "Mexico City", "New York City", "Mumbai", 
    "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

    sort($city);

    foreach($city as $value){
        echo $value.", ";
    }

    echo "<br>";

    $city1 = array("Los Angeles", "Calcutta", "Osaka", "Beijing");

    $city = array_merge($city,$city1);

    sort($city);

    foreach($city as $value){
        echo $value.", ";
    }
?>