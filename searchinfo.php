<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>搜索结果</title>
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
			<div class="cart-title">搜索结果</div>
			<div class="cart-content">
				<?php
				include 'admin/conn.php';
				$type =$_SESSION['type'];			//创建Session变量保存用户名
				$search=$_SESSION['search'];
				$sql="select * from qikan where 所属类型='$type' and(刊名 like'%$search%'or 出版地 like'%$search%'or ISSN like'%$search%' or CN like'%$search%')"; 
				$query=$conn->query($sql); 
				$all_num=mysqli_num_rows($query); //总条数
				$page_num=15; //每页条数
				$page_all_num = ceil($all_num/$page_num); //总页数
				$page=empty($_GET['page'])?1:$_GET['page']; //当前页数
				$page=(int)$page; //安全强制转换
				$limit_st = ($page-1)*$page_num; //起始数//
				$sql="select * from qikan where 所属类型='$type' and(刊名 like'%$search%'or 出版地 like'%$search%'or ISSN like'%$search%' or CN like'%$search%') limit $limit_st , $page_num"; 
				$query=$conn->query($sql);   
				$row=mysqli_fetch_array($query);  
				$i=0;
				if($row){
					do{ 
						$i++;
				?>
				
				<div class="searchinfo">
					<dl >
						<dd><?php echo $i;?></dd>
						<dd> <a style="text-decoration: none; " href="qikandetail.php?$id=<?php echo $row['刊名'];?>">『<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['所属类型']);?>』&nbsp;<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['刊名']);?>&nbsp;&nbsp;<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['出版地']);?></a>
						</dd>
						<dt><?php echo (substr($row['添加日期'],0,9)) ;?></dt>
					</dl>
				</div>
				<?php
					}while($row=mysqli_fetch_array($query));
				}
				else {
				?>
				<div class="searchinfo">
					<center>
						您检索的信息资源不存在!
					</center>
				</div>
				<?php		
				}
				$px = $page>=$page_all_num ? $page_all_num : $page+1 ;  
				$ps = $page<=1 ? 1 : $page-1 ;
				?>
				<div class="page">
					<ul>
						<li><a href='searchinfo.php'>首页</a></li>
						<li><a href='searchinfo.php?page=<?php echo $ps?>'>上一页</a></li>
						<li><a href='searchinfo.php?page=<?php echo $px?>'>下一页</a></li>
						<li><a href='searchinfo.php?page=<?php echo $page_all_num?>'>尾页</a></li>
					</ul>
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
<script type="text/javascript" src="js/slideShow.js"></script>
<script type="text/javascript" src="js/backtop.js">