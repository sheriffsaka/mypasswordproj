<?php

session_start();
ob_start();

include("../database/connect.php");

//Initializing variable on page
    $username = $_POST['username'];
    $pword = $_POST['password'];
    $password = md5($pword);

    //to presevent MySQLi Injection.

    $username = stripslashes($username);
    $password = stripslashes($password);

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "select * from users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $count = mysqli_num_rows($result);

    if($result){
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $username;
            header('Location:loginImage1.php');
            echo "Login Successful";
        }else{
            $sql = "select * from users where username = '$username' and password = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $rows = mysqli_num_rows($result);
            if($rows == 0)
            header('Location:login1fail.html');
        }
        //$_SESSION['username'] = $username;
        //header('Location:loginImage1.php');
        //echo "Login Successful";
    // }else{
        
    //     if($rows == 0){
    //         header('Location:login1fail.html');
    //         echo "Login Failed";
    //         exit;
    //         return;
    //     }

        //echo "Login failed. Invalid username or password";
    }

    
?>



<?php
// session_start();
// // session_destroy();
// // session_start();

// // $username = $_SESSION['username'];
// // $password = $_SESSION['password1'];
// ob_start();


//     include("../database/connect.php");


//         //Testing connection to the database
//         $username = $POST['username'];
//         $pword = $POST['password1'];
//         $password = md5($pword);


//         $sql = "SELECT * FROM users WHERE username = '$username'";
//         $resultsql = mysqli_query($conn, $sql);
//        // $checkEntry = mysqli_num_rows($runsql);

//         if($resultsql){
//             $rows = mysqli_num_rows($resultsql);
//             if($rows > 0){
//                 $row = mysqli_fetch_array($resultsql);
//                 $_SESSION['username'] = $username;
//                 header('Location:loginImage1.php');
//             }
//                 //$message = "Invalid Password";
//                 //header('Location:login1fail.html');
//                 //Check for invalid login details...

//             else{
//                 // $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
//                 // $resultsql = mysqli_query($conn, $sql);
//                 // $row = mysqli_fetch_array($resultsql);
//                 // $rows = mysqli_num_rows($resultsql);

//                 if($rows == 0)
//                 header('Location:login1fail.html');
//             }
//         }





?>