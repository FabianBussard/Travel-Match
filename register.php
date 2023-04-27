<?php

session_start();

include("db_connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(!empty($user_name) && !empty($email) && !empty($phone) && !empty($password)){
        $user_id = rand(1, 900000000);
        $query = "INSERT INTO users(`user_id`, `user_name`, `email`, `phone`, `password`) VALUES ('$user_id', '$user_name', '$email', '$phone', '$password')";
        mysqli_query($con, $query);
        header("Location: home1.php");
       die;
    }else{
       echo "Enter valid info";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="login-registerstyles.css" type="text/css">
</head>
<body>
    <div class="registerbox">
        <h2>Sign Up</h2>

        <form action="" method="POST">
            <input type="text" placeholder="Username" name="username" id="username">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="number" placeholder="Phone Number" name="phone" id="phone">
            <input type="password" placeholder="Password" name="password" id="password">
            <button type="submit" class="registerbtn" name="registerbtn">Sign Up</button><br>
            <a href="LoginForm.php"><button type="button" name="home" class="returnhome">Login</button></a>

            
           <!-- <div class="loginlink">
                <span>If you already registered, <a href="LoginForm.html">Click Here.</a></span>
            </div> !-->
        </form>
    </div>

   
</body>
</html>