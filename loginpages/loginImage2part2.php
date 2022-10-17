<?php
    session_start();
    ob_start();
?>
<html>
    <head>
        <title>Graphical Password Authentication System using Intuitive Approach</title>
        <link rel="stylesheet" href="../css/styles.css">
        
        <script src="./js/loginsplit2.js" type="text/javascript"></script>
    </head>
    <?php
    if(isset($_GET['store'])){
        $_SESSION['layer4'] = $_GET['store'];
    }
        $var=$_GET['var'];
        $_SESSION['grpwdlog2']=$_GET['var'];
       // $_SESSION['layer4'] = $_GET['store'];

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
                <h1>Login Form</h1>
            </p>
            <?php
                    echo $_SESSION['grpwdlog2'];
                    echo $_SESSION['layer4'];
                ?>
            
            <p>
            <h3>This stage requires you to select a part of the image you previously selected for additional security.</h3>
            </p>
        </div>
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
        <div class="login_info">
				<h2>Login Step 3 - I</h2>
                <p>Following is the 2nd image you chose.</p>
                <img src=<?php echo $var; ?> onload="changeImg(this)" height="120" width="120">
                <p class="account">Select one from below four parts.</p>
				<center><div class="test" id="test"></div></center>
			</div>
        </div>
<footer>
    <div>Developed By: SacTech Computers @ 2022</div>
</footer>
    </body>
</html>