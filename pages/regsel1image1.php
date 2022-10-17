<?php
    session_start();
    ob_start();
?>
<html>
    <head>
        <title>Graphical Password Authentication System using Intuitive Approach</title>
        <link rel="stylesheet" href="../css/styles.css">
        
        <script src="../js/split1.js" type="text/javascript"></script>
    </head>
    <?php
        $var=$_GET['var'];
        $_SESSION['grpwd1']=$_GET['var'];
        $_SESSION['layer1'] = $_GET['var'];

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
                <h1>Registration Form</h1>
            </p>
            <p>
                
                <h3>This stage requires you to select a part of the image you previously selected for additional security.</h3>
                <!-- <h4>NOTE: You are to select two sets of images as your password. </h4> -->
            </p>
        </div>
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
        <div class="login_info">
				<h2>Registration Step 2 - I</h2>
                <p>Following is the 1st image you chose.</p>
                <img src=<?php echo $var; ?> onload="changeImg(this)" height="120" width="120">
                <p class="account">Select one part from the below four parts.</p>
				<center><div class="test" id="test"></div></center>
			</div>
        </div>
<footer>
    <div>Developed By: SacTech Computers @ 2022</div>
</footer>
    </body>
</html>