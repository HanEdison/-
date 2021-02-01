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
		include 'admin/conn.php';
		include 'qqonline.php';
		?>
		<div class="container">
			<?php
			include 'leftpart.php';
			?>
			<div class="rightsidebar">
				<div class="right">
					<ul class="breadcrumb">
						<li><a href="index.html">首页</a><span class="divider"></span></li>
						<li class="active">发表流程</li>
					</ul>
					<?php 
					$sql=$conn->query("select * from  lccontent   ");
					$res=mysqli_fetch_array($sql);
					?>
					<div class="cart-title"><?php echo $res['流程标题'];?></div>
					<div class="cart-content">
						<div class="cart-detail"> <?php echo $res['流程内容'];?></div>
					</div>
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