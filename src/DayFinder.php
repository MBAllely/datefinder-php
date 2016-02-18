<?php
    class DayFinder
    {
        function returnDay($day, $month, $year)
        {
            return date('l' , mktime(0 , 0 , 0 , $month , $day , $year ));
        }
    }

?>
