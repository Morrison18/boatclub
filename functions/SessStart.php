<?php
	session_start();
	
	if ( isset ( $_SESSION['views'])){
		$_SESSION ['views'] = $_SESSION ['views'] + 1;
	}else {
		$_SESSION ['views']=1;
	}
?>

<html>
	<head>
		<title>Session Demo</title>
	</head>
	<body>
		<p>Pageviews: <?php echo $_SESSION ['views'];?></p>
	<body>
</html>