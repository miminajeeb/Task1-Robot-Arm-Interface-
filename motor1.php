<?php
 error_reporting(0);
    // connection variables 
       $host = "localhost";
       $username = "root";
       $pwd = "";
       $db = "robotarm";
       $port = 3307;
       
   // establish connection  
       $con = mysqli_connect($host, $username, $pwd, $db, $port);
    
   // create the query
        $query = "select motor1 from motorsdegrees ORDER BY id DESC limit 1";
        
   // play the query
        $result = mysqli_query($con, $query);
        $data = mysqli_fetch_row($result);
        $degree = $data[0];
        
   // print the value on the screen
        echo $degree;
?>
