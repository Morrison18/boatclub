<?php

session_start();
header('location:../html/login.html');

$con=mysqli_connect('localhost','root','test');
mysqli_select_db($con, 'boatclub');

$name = $_POST['user'];
$pass = $_POST['password'];

$s= "select * from userTable where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	echo" Username Already Taken";
}else{
	$reg= " insert into userTable(user,password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>
</html>