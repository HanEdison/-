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
    <li> <a href="index.php">首页</a> <span class="divider"></span> </li>
    <li> <a href="fenlei.php">期刊知识</a> <span class="divider"></span> </li>
	<?php 
        //session_start(); 
        // $id=$_GET['$id'];
       // $_SESSION['id'] =$id ;	
         //$id =$_SESSION['id'] ;
        ;//数据库链接，自己解
	  //$sql="select * from zccontent "; 
	   //  $quer=$conn->query($sql);   
     	// $row=mysqli_fetch_array($quer);
		 ?>
   
  </ul>
      <div class="contact">
        <ul class="title_t">
         <?php 
         include("admin/conn.php");
         $sql="select * from qkcontent "; 
         $quer=$conn->query($sql); 
         $all_num=mysqli_num_rows($quer); //总条数
         $page_num=12; //每页条数
         $page_all_num = ceil($all_num/$page_num); //总页数
         $page=empty($_GET['page'])?1:$_GET['page']; //当前页数
	     $page=(int)$page; //安全强制转换
	     $limit_st = ($page-1)*$page_num; //起始数//
	  
	     $sql="select * from qkcontent  limit $limit_st , $page_num"; 
	     $quer=$conn->query($sql); 
             $row=mysqli_fetch_array($quer);
     	if($row) 
            {
           do
        {    
		 ?>
			
           <li><a href="qkzsdetail.php?$id=<?php echo $row['期刊标题'];?>" target="_blank"><?php echo $row['期刊标题'];?></a></li>

       <?php 
        } while ($row = mysqli_fetch_array($quer)) ;
        
            } else
          {echo "没有相关信息";}
	        $px = $page>=$page_all_num ? $page_all_num : $page+1 ;  
	    	$ps = $page<=1 ? 1 : $page-1 ;
 ?>
 </ul>
      <div class="page">
          <form action="qkzs.php" method="get">
        <ul>
            <li><a href='qkzs.php?page=1'>首页</a></li>
          <li><a href='qkzs.php?page=<?php echo $ps?>'>上一页</a></li>
          <li><a href='qkzs.php?page=<?php echo $px?>'>下一页</a></li>
          <li><a href='qkzs.php?page=<?php echo $page_all_num?>'>尾页</a></li>
        </ul>
              </form>
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
<script type="text/javascript" src="js/backtop.js">