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
		   <?php echo $_GET['$id'];?>
         <?php  
		        error_reporting(0);  
				include("admin/conn.php");
				$sql="select * from  qikan  where 刊名='".$_GET['$id']."'";
                $res = $conn->query($sql);
				$row = mysqli_fetch_array($res);  
				?>
    <li> <a href="index.php">首页</a> <span class="divider"></span> </li>
    <li> <a href="fenlei.php?$id=教育教学">期刊分类</a> <span class="divider"></span> </li>
     <li> <a href="fenlei.php?$id=<?php echo $row['所属类型'];?>"><?php echo $row['所属类型'];?>类期刊</a> <span class="divider"></span> </li>
    <li class="active"><?php echo $row['刊名'];?></li>
  </ul>
      <div class="cart-title"><?php echo $row['刊名'];?></div>

      <div class="cart-pic"><img src="uploadfile/images/<?php echo $row['图片URL'];?>"></div>
      <div class="cart-infowarp"> 
        <span class="cart-infotitle">刊名</span>
        <div class="cart-info"><?php echo $row['刊名'];?></div>
        <span class="cart-infotitle">主办</span>
        <div class="cart-info"><?php echo $row['主办'];?></div>
        <span class="cart-infotitle">周期</span>
        <div class="cart-info"><?php echo $row['周期'];?></div>
        <span class="cart-infotitle">出版地</span>
        <div class="cart-info"><?php echo $row['出版地'];?></div>
        <span class="cart-infotitle">语种</span>
        <div class="cart-info"><?php echo $row['语种'];?></div>
        <span class="cart-infotitle">开本</span>
        <div class="cart-info"><?php echo $row['开本'];?></div>
        <span class="cart-infotitle">ISSN</span>
        <div class="cart-info"><?php echo $row['ISSN'];?></div>
        <span class="cart-infotitle">CN</span>
        <div class="cart-info"><?php echo $row['CN'];?></div>
        <span class="cart-infotitle">邮发代号</span>
        <div class="cart-info"><?php echo $row['邮发代号'];?></div>
        <span class="cart-infotitle">更新日期</span>
        <div class="cart-info"><?php echo $row['添加日期'];?></div>
      </div>
       <div class="cart-content"> <h4>期刊简介</h4>    &nbsp;&nbsp;&nbsp;&nbsp ;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['期刊简介'];?></div>
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