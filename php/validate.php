<?php
include '../functions/Connect.php';
session_start();


$con=dbConnect();
mysqli_select_db($con, 'boatclub');

$name = $_POST['user'];
$pass = $_POST['password'];

$s= "select * from userTable where user = '$name' && password ='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['user']= $name;
	header('location:welcomedb.php');
}else{
	header('location:../html/login.html');
}

?>