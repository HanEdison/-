<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	session_start();
	$type=$_POST['type'];
	$content=$_POST['search'];
	$_SESSION['type'] =$type ;			//创建Session变量保存用户名
	$_SESSION['search'] =$content;
	header("Location:searchinfo.php");
	?>
</body>
</html>
