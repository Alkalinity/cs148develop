<?php
    
    function timeMessage($time) {
        $message = ' ';
        if ($time >= '0000' AND $time < '0600'){
            $message = 'Good Night';    
        }
        if ($time >= '0600' AND $time < '1200'){
            $message = 'Good Morning';    
        }        
        if ($time >= '1200' AND $time < '1800'){
            $message = 'Good Afternoon' ;   
        }
        if ($time >= '1800' AND $time < '2400'){
            $message = 'Good Evening';    
        }
        return $message;
    }
    $time = '0623';
    print timeMessage($time);
    
    
?>