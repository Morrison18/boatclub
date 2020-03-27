<?php

	session_start();
	session_destroy();
?>

<html>
	<head>
		<title>Sessions Demo</title>
	</head>
	<body>
		<p>Pageviews: <?php echo $_SESSION ['views']; ?></p>
	</body>
</html>