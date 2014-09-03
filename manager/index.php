<!doctype html>
<?php
	session_start();
	if(!$_SESSION['mid']){
		header('Location: /index.php');
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Manager Index</title>
</head>
<body>
	Manager Index
	<a href="/action/managerAction.php?action=logout">Logout</a>
</body>
</html>