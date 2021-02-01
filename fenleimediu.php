<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	session_start();
	$id=$_GET['$id'];
	$_SESSION['id'] =$id ;			//创建Session变量保存用户名
	header("Location: fenlei.php");
	?>
</body>
</html>
