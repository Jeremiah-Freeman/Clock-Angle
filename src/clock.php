<?php
    class Clock
    {
        function ClockAngle($something)
        {
            if (strpos($something, ":" )){
                $newArray = explode(":", $something);
                $hr = $newArray[0];
                $min = $newArray[1];
                if($hr <= 12 && $min < 60 && $hr >=0 && $min >=0){
                    $deg = .5*(60 * $hr - 11 * $min);
                    if($deg>180){
                        return abs(360-$deg);
                    }else{
                        return abs($deg);
                    }
                }else {
                    return "please enter a valid time";
                }
            }
            else {
                return "please enter a valid time";
            }
        }
    }

?>
