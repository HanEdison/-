<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>论文期刊网</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/nav.css" rel="stylesheet" type="text/css">
<link href="css/base.css" rel="stylesheet" type="text/css">
<link href="css/fix.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<?php
		error_reporting(0);
		include 'header.php';
		include 'qqonline.php';
		?>
		<div class="container">
			<div class="cart-title">留言板</div>
			<div class="cart-content">
				<div class="cart-form">
					<form action="liuyan_process.php" method="post" enctype="multipart/form-data">
						<table class="insert-tab" width="100%">
							<tbody>
								<tr>
									<th><i class="require-red">*</i>标题：</th>
									<td><input class="common-text" name="BT" size="10" value="" type="text"></td>
								</tr>
								<tr>
									<th><i class="require-red">*</i>你的姓名：</th>
									<td><input class="common-text" name="XM" size="30" type="text"></td>
								</tr>
								<tr>
									<th>电子邮箱：</th>
									<td><input class="common-text" name="YX" size="30" value="" type="email"></td>
								</tr>
								<tr>
									<th><i class="require-red">*</i>QQ：</th>
									<td><input class="common-text" name="QQ" size="30" value="" type="text"></td>
								</tr>
								<tr>
									<th><i class="require-red">*</i>手机号：</th>
									<td><input class="common-text" name="SJ" size="30" value="" type="text"></td>
								</tr>
								<tr>
									<th><i class="require-red">*</i>留言内容：</br>（500字以内）</th>
						            <td><textarea name="textarea" class="common-textarea" cols="30" style="width: 98%;" rows="5"></textarea></td>
						       </tr>
					           <tr>
                               <th></th>
								   <td><input class="btn btn-primary" value="提交" type="submit" name="submit" id="btn-center">
									   <input class="btn" onclick="history.go(-1)" value="返回" type="button"></td>
					           </tr>
					        </tbody>
				        </table>
			        </form>
	            </div>
	        </div>
	    </div>
    </div>
<?php
 include 'bottom.php';
?>
<div id="backtop"></div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/backtop.js">