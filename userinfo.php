<?php

$con = mysqli_connect('localhost' , 'admin', 'admin123')
if($con){
	echo "CONNECCTION SUCCESSFUL";
	}else{
	echo "FAILED";
	}
mysqli_select_db($con, "fitness")
$user = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['commenr'];

$query = "insert into unserdata (user, email, mobile, comments) values ('$user' , '$email' , '$mobile' , '$comment');"

mysqli_query($con , $query);
header('location:index.php');

?>