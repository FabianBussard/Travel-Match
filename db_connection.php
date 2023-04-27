<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "TravelMatch";
 
 $con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

 if(mysqli_connect_errno()){
    echo "Failed to connect";
    exit();
 }
 //echo "Connection success";

 ?>