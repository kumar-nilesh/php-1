<?php
    $month = date("F");
    
    if($month == "June" || $month == "July" || $month == "August"){
        echo "Current Season is Summer.";
    }elseif($month == "September" || $month == "October" || $month == "November" ){
        echo "Current Season is Fall.";
    }elseif($month == "December" || $month == "January" || $month == "February"){
        echo "Current Season is Winter";
    }else{
        echo "Current Season is Spring";
    }

?>