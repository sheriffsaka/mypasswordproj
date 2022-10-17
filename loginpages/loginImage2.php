<?php
    session_start();
    ob_start();
?>
<html>
    <head>
        <title>Graphical Password Authentication System using Intuitive Approach</title>
        <link rel="stylesheet" href="../css/styles.css">
        <script>
            function changeImg(img){
                var name = img.src;
                console.log(name);
                window.location.href="loginImage2part2.php?var="+name;
            }
        </script>
    </head>
    <?php
    if(isset($_GET['store1'])){
        $_SESSION['layer3'] = $_GET['store1'];
       // $slice1 = $_SESSION['layer3'];
    }
        // $var=$_GET['var'];
        // $_SESSION['grpwdlog1']=$_GET['var'];
        $_SESSION['layer3'] = $_GET['store1'];

    ?>
    <body>
        <div>
                <ul>
                    <li><a href="../index.html">Home</a> </li>
                    <li><a class="active" href="#register1.php">Register</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
        </div>
        <div>
            <p>
                <h1>Login Step 3</h1>
            </p>

            <?php
                    echo $_SESSION['grpwdlog1'];
                    echo $_SESSION['layer3'];
                ?>
            <p>
            
                <h3>Select your prefered Second Image password using the pictures displayed below.</h3>
            </p>
        </div>
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
            
                <!-- Adding the password image category -->
                <div>
                <div>
				<h2>Account's Graphical Password 2</h2>
				<p class="account1">Select your 2nd image graphical password 2.</p>
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