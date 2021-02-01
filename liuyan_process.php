<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	include("admin/conn.php");
	if(isset($_POST["submit"]))
	{
		$BT=$_POST['BT'];
		$XM=$_POST['XM'];
		$YX=$_POST['YX'];
		$QQ=$_POST['QQ'];
		$SJ=$_POST['SJ'];
		$textarea=$_POST['textarea']; 
		if ($BT == '') 
		{
			echo "<script>alert('标题不能为空！');history.back(-1);</script>";
		}
		else if ($XM == '') 
		{
			echo "<script>alert('姓名不能为空！');history.back(-1);</script>";
		} 
		else if ($QQ == '') 
		{
			echo "<script>alert('QQ不能为空！');history.back(-1);</script>";
		} 
		else if ($SJ == '') 
		{
			echo "<script>alert('手机不能为空！');history.back(-1);</script>";
		} else if ($textarea == '') 
		{
			echo "<script>alert('内容不能为空！');history.back(-1);</script>";
		} 
		else 
		{
			$result=$conn->query("INSERT INTO leavemessage values ('','$BT','$XM','$YX','$QQ','$SJ','$textarea')");
			if($result)
			{
				echo "<script>alert('留言成功，我们会尽快给您答复！');document.location='index.php';</script>";
			}
			else
			{
				echo "<script>alert('留言失败');history.back(-1);</script>";
			}
		}
	}?>
</body>
</html>