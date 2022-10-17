<?php
include('connect.php');
//Testing connection to the database
$username = $GET['username'];
$password = $GET['password1'];


$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$runsql = mysqli_query($conn, $sql);
$checkEmail = mysqli_num_rows($runsql);

if($checkEmail != 0){
    $UserExist = mysqli_fetch_array($runsql);
    if($UserExist['password'] != $password){
        $message = "Invalid Password";
    }else{
        //$message = "You have successfully logged in";
        header('Locatio:loginstep2.php');
    }
    $message = "Already Registered";
}else{
    
        $message = "No account created for this user yet.";
}


?>
