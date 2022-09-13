<?php
if ($_GET){
        $date = $_GET['date'];
        date_default_timezone_set('Australia/Brisbane');
        $christmasDay = strtotime('December 25');
        $time = time();
        $seconds = $christmasDay - $time;
        $minutes = $seconds / 60;
        $hours = $minutes / 60;
        $days = ceil($hours / 24);
        echo "There are " . $days . " days until Christmas";
    }
?>