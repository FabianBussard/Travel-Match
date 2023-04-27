<?php
session_start();

include("db_connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(!empty($user_name) && !empty($password)){
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password){
                    $_SESSION['user_id'] = $user_data['user_id']; 
                    header("Location: home1.php");
                    die;
                }
            }
        }
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
    <title>Login Page</title>
    <link rel="stylesheet" href="login-registerstyles.css" type="text/css">
</head>
<body>
    <div class="loginbox">

        <h2>Authentication</h2>

        <form action="" method="POST">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" name="login" class="loginbtn">Login</button>
            <a href="register.php"><button type="button" name="home" class="returnhome">Sign up</button></a>

        
           <!-- <div class="registerlink">
                <span>Not Registered?</span> <a href="register.html">Click Here. <br></a>
            </div> !-->
        </form>
    </div>
</body>
</html>