<?php
session_start();
ob_start();
?>

<html>
    <head>
        <title>Registration Success!</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>

    <?php
    include("../database/connect.php");

        $var=$_GET['var'];
        $_SESSION['layer2']=$_GET['var'];

        $username = $_SESSION['username'];
        $fullname = $_SESSION['fullname'];
        $email = $_SESSION['email'];
        $password = $_SESSION['password1'];
        $image1 = $_SESSION['grpwd1'];
        $img1p1 = $_SESSION['layer1'];
        $image2 = $_SESSION['grpwd2'];
        $img2p2 = $_SESSION['layer2'];
        
    $query = "INSERT INTO users(username, fullname, email, password, image1, img1part1, image2, img2part2) 
                VALUES('$username', '$fullname', '$email', '$password', '$image1', '$img1p1', '$image2', '$img2p2')";
    $result = mysqli_query($conn, $query);

    
    ?>
        <div>
                <ul>
                    <li><a href="../index.html">Home</a> </li>
                    <li><a class="active" href="#register.php">Register</a></li>
                    <li><a href="../loginpages/login.html">Login</a></li>
                </ul>
        </div>
        <div>
            <p>
                <h1>Registration Successfull!</h1>
            </p>
            <p>
                <h2>You can now login to your newly created account.</h2>
                <h4>Already Registered, <a href="../loginpages/login.html">Click Here to login.</a> </h4>
            </p>
        </div>
    </body>
</html>