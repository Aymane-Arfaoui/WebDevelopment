<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number of Visits</title>
</head>
<body>

<?php

         date_default_timezone_set('America/New_York');
        $cookie = "numvisits";

        if(isset($_COOKIE[$cookie]))
        $numvisits = $_COOKIE[$cookie] +1;
        else{
            $numvisits = 1;
        }
        setcookie($cookie, $numvisits, time()+86400);

        if(isset($_COOKIE['last_visit'])){
            $last_visit = $_COOKIE['last_visit'];
            $last_visit_date = date("D M j H:i:s T Y", $last_visit);
            $last_visit_message = "Last time you visited my webpage on: " . $last_visit_date;
            $timezone_message = " (EST = Eastern Standard Time Zone)";
        } else {
            $last_visit_message = "Welcome to my webpage! It is your first time that you are here.";

        }
        

        $last_visit_time = time();
        setcookie('last_visit', $last_visit_time, time()+86400);
        
        echo "Hello, this is the " .$numvisits. " time that you are visiting my webpage.<br>";
        echo $last_visit_message . $timezone_message;
        

?>
    
</body>
</html>