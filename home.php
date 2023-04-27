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
 echo "Connection success";

$sql = "SELECT * FROM category";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo $row['category'];
        }
    }
}

?>