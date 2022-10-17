<?php
    session_start();
    ob_start();

    // $_SESSION['username'] = $username;
    // $_SESSION['fullname'] = $fullname;
    // $_SESSION['email'] = $email;
    // $_SESSION['password1'] = $password;

    include("../database/connect.php");

    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pword = $_POST['password1'];
    $password = md5($pword);

    //Check username already exist...
    $result = mysqli_query($conn, "select * from users where username = '$username' and email = '$email'");
    if(mysqli_num_rows($result)>0)
    {
        header('Location:register1fail.html');
        exit;
        return;
    }else{
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['email'] = $email;
        $_SESSION['password1'] = $password;
        header('Location:regsel1.php');
    }

    //Check email already exist...
    // $result = mysqli_query($conn, "select * from users where email = '$email'");
    // if(mysqli_num_rows($result)>0)
    // {
    //     header('Location:register1fail.html');
    //     exit;
    //     return;
    // }

    
    // header('Location:regsel1.php');



?>