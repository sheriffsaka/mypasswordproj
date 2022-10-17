<?php
    session_start();
    ob_start();

    // $_SESSION['username'] = $username;
    // $_SESSION['fullname'] = $fullname;
    // $_SESSION['email'] = $email;
    // $_SESSION['password1'] = $password;
?>
<html>
    <head>
        <title>Graphical Password Authentication System using Intuitive Approach</title>
        <link rel="stylesheet" href="../css/styles.css">
        <script>
            function changeImg(img){
                var name = img.src;
                console.log(name);
                window.location.href="loginImage1part1.php?var="+name;
            }
        </script>
    </head>
    <body>

    <?php
        //echo $_SESSION['username'];
        
    ?>
        <div>
                <ul>
                    <li><a href="../index.html">Home</a> </li>
                    <li><a class="active" href="#register1.php">Register</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
        </div>
        <div>
            <p>
                <h1>Login Step 2</h1>
            </p>
            <p>
                
                <h3>Select your prefered First Image password using the pictures displayed below.</h3>
                <h4>NOTE: You are to select two sets of images as your password. </h4>
            </p>
        </div>
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
            
                <!-- Adding the password image category -->
                <div>
                <div>
				<h2>Account's Graphical Password 1</h2>
				<p class="account1">Select your 1st image graphical password 1.</p>
                    <center>
                        <img style="border: 2px solid black;" src="../static/images/qrcode.png" onclick="changeImg(this)" height="100" width="100">
                        <img style="border: 2px solid black;" src="../static/images/skill1.jpg" onclick="changeImg(this)" height="100" width="100">
                        <img style="border: 2px solid black;" src="../static/images/system1.jpg" onclick="changeImg(this)" height="100" width="100">
                        <img style="border: 2px solid black;" src="../static/images/webstack.jpg" onclick="changeImg(this)" height="100" width="100">
                    </center>
                    
			    </div>
                </div>
                
        </div>
    </body>
</html>