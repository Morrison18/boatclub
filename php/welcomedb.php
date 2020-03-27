<?php
include 'header.php';
session_start();

if (!isset(($_SESSION['user']))){
    header('location:../html/login.html');
}

?>

<title> User Login and Registration </title>

<html>
<head>
<title> Home Page</title>
</head>

<body>

<div class ="container">

<button><a class="float-right" href="../php/logout.php"> LOGOUT </a></button>

<h1> Welcome <?php echo $_SESSION['user']; ?> </h1>

</div>

</body>

</html>