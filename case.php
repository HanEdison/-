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
		include 'admin/conn.php';
		include 'header.php';
		include 'qqonline.php';
		?>
		<div class="container">
			<?php
			include 'leftpart.php';
			?>
			<div class="rightsidebar">
				<div class="right">
					<ul class="breadcrumb">
						<li><a href="index.php">首页</a><span class="divider"></span></li>
						<li class="active">成功案例</li>
					</ul>
					<div class="cart-content">
						<?php 
						$sql="select * from casesucess"; 
						$query=$conn->query($sql); 
						$all_num=mysqli_num_rows($query); //总条数
						$page_num=6; //每页条数
						$page_all_num = ceil($all_num/$page_num); //总页数
						$page=empty($_GET['page'])?1:$_GET['page']; //当前页数
						$page=(int)$page; //安全强制转换
						$limit_st = ($page-1)*$page_num; //起始数//
						$sql="select * from casesucess limit $limit_st , $page_num"; 
						$query=$conn->query($sql);   
						while($row=mysqli_fetch_array($query)){    
						?>
						<div class="case-box">
							<div class="case-pic">
								<div id="images">
									<a id="casepic<?php echo $row['id'];?>"  href="uploadfile/case/<?php echo $row['图片URL'];?>"><img alt="" src="uploadfile/case/<?php echo $row['图片URL'];?>" /></a> 
								</div>
							</div>
						</div>
						<?php 
						}
						$px = $page>=$page_all_num ? $page_all_num : $page+1 ;  
						$ps = $page<=1 ? 1 : $page-1 ;
						?>
						<div class="page">
							<ul>
								<li><a href='case.php'>首页</a></li>
								<li><a href='case.php?page=<?php echo $ps?>'>上一页</a></li>
								<li><a href='case.php?page=<?php echo $px?>'>下一页</a></li>
								<li><a href='case.php?page=<?php echo $page_all_num?>'>尾页</a></li>
							</ul>
						</div>
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
<script type="text/javascript" src="js/backtop.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.imgbox.pack.js"></script>
<?php

	$sql="select * from casesucess";
	$res = $conn->query($sql);
	while ($row = mysqli_fetch_array($res)){
	?>
<script type="text/javascript">
		$(document).ready(function() {
			$("#casepic<?php echo $row['id'];?>").imgbox({
			   'zoomOpacity'	: true,
				'alignment'		: 'center'
			});
		});
</script>
<?php
						}
					 ?>