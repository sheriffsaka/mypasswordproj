<?php
session_start();
ob_start();
?>

<html>
<head>
	<title>Testing Login Data</title>
</head>

<body>

<?php

include('../database/connect.php');

if(isset($_GET['store'])){
	$_SESSION['layer4'] = $_GET['store'];
   // $slice1 = $_SESSION['layer3'];
}
//$_SESSION['layer4']=$_GET['store'];
$username=$_SESSION['username'];

$image1=$_SESSION['grpwdlog1'];
$image2=$_SESSION['layer3'];
$image3=$_SESSION['grpwdlog2'];
$image4=$_SESSION['layer4'];

echo $image1;
echo $image2;
echo $image3;
echo $image4;


	// $result=mysqli_query($conn,"select image1, img1part1, image2, img2part2 from users where username='$username'");
	// 	if (mysqli_num_rows($result) > 0)
	// 	{
	// 		$row=mysqli_fetch_array($result);

	// 		if($row[0]==$image1 && $row[1]==$image2 && $row[2]==$image3 && $row[3]==$image4){
	// 			header('Location:profile.php');
	// 		}
	// 		// Check for invaid login details
	// 		else 
	// 		{
	// 			header('Location:login1fail.php');
	// 			$_SESSION['retry'] = 1;
	// 		}
	// 	}
		
?>

</body>
</html>