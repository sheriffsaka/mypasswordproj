<?php
session_start();
ob_start();
?>

<html>
<head>
	<title>Login Successful!</title>
</head>

<body>

<?php

include('../database/connect.php');		
// $_SESSION['layer6']=$_GET['var'];
$username=$_SESSION['username'];
// $layer1=$_SESSION['layer1'];
// $layer2=$_SESSION['layer2'];
// $layer3=$_SESSION['layer3'];
// $layer4=$_SESSION['layer4'];
// $layer5=$_SESSION['layer5'];
// $layer6=$_SESSION['layer6'];

$image1=$_SESSION['grpwdlog1'];
$image2=$_SESSION['layer1'];
$image3=$_SESSION['grpwdlog2'];
$image4=$_SESSION['layer2'];

$var=$_GET['var'];
$_SESSION['a'][10]=$_GET['var'];
	
$name=$_SESSION['a'][0];
$password=$_SESSION['a'][1];
$realname=$_SESSION['a'][2];
$email=$_SESSION['a'][3];
$phone=$_SESSION['a'][4];
$image1=$_SESSION['a'][5];
$slice1=$_SESSION['a'][6];
$image2=$_SESSION['a'][7];
$slice2=$_SESSION['a'][8];
$image3=$_SESSION['a'][9];
$slice3=$_SESSION['a'][10];

$query="INSERT into user(username,password,name,email,phone,image1,slice1,image2,slice2,image3,slice3,userimage) 
values('$name','$password','$realname','$email',$phone,'$image1','$slice1','$image2','$slice2','$image3','$slice3','../user/images/user/default.png')";
$result=mysqli_query($con, $query);
	
?>

</body>
</html>