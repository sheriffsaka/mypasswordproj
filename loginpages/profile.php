<?php
session_start();
ob_start();
?>

<html>
    <head>
        <title>Graphical Password Authentication System using Intuitive Approach</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
            <?php
            include("../database/connect.php");
            $username=$_SESSION['username'];
            $result=mysqli_query($conn,"select username,fullname,email, from users where username='$username'");
                    if (mysqli_num_rows($result)>0)
                    {
                        $row = mysqli_fetch_array($result);
                        $username1 = $username;
                        $name = $row['username'];
                        $fname = $row['fullname'];
                        $email = $row['email'];
                    }
                    
            ?>
    <body>
        <div>
                <ul>
                    <li><a class="active" href="#home">Home</a> </li>
                    <li><a href="./pages/register.html">Register</a></li>
                    <li><a href="../loginpages/login.html">Login</a></li>
                </ul>
        </div>
        <section style="border-radius: 5px; background-color: #f2f2f2; padding: 20px; align-items: center;">
                <div>
                    <p align="center">
                        <h1>User Profile</h1>
                    </p>
                    <p>
                        <div class="contain"><img src="../static/images/manavatar1.png" height="100" width="100"></div>
                        <h3>User Account Information</h3>
                        <h3>Username: </h3><?php echo $_SESSION['username']; ?><br>
                        

                        <h4><hr> </h4>
                    </p>
                </div>
                <div>
                    <h3>Manage you account:</h3><br>
                    <h4><a href="#">Reset Text Password</a></h4>
                    <h4><a href="#">Reset Graphical Password</a></h4>
                </div>
        </section>
    </body>
</html>