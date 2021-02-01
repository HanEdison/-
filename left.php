<?php 
	error_reporting(0);
    include 'admin/conn.php';
?>
<div class="leftsidebar">
    <div class="slideShow">
     <ul>
        <li><a href="qikandetail.php?$id=《科技创新与应用》"><img src="uploadfile/images/科技创新与应用.png" width=220 height=250 border=0 /></a></li>
        <li><a href="qikandetail.php?$id=《机电信息》"><img src="uploadfile/images/机电信息.jpg" width=220 height=250 border=0 /></a></li>
        <li><a href="qikandetail.php?$id=《中国管理信息化》"><img src="uploadfile/images/中国管理信息化.jpg" width=220 height=250 border=0 /></a></li>
        <li><a href="qikandetail.php?$id=《经济研究导刊》"><img src="uploadfile/images/经济研究导刊.jpg" width=220 height=250 border=0 /></a></li>
      </ul>
      <div class="showNav"> <span class="active">1</span> <span>2</span> <span>3</span> <span>4</span> </div>
    </div>
    <div class="contact3">
      <div class="contact3-title"><a id="title-detail">联系我们</a><a class="more"/><img src="img/icon-help.gif"/></a></div>
      <div class="contact3-list">
        <dl>
          <dt>联系人：</dt>
          <dd>张老师</dd>
          <dt>联系电话：</dt>
          <dd>17701933532</dd>
          <dt>QQ：</dt>
          <dd>158923668</dd>
        </dl>
        <ul>
          <li><a href="leavemessage.php">给我们留言</a></li>
          <li><a href="onlinesub.php">在线投稿</a></li>
        </ul>
      </div>
    </div>
    <div class="recommend">
      <div class="recommend-title"><a id="title-detail">推荐期刊</a><a class="more" href="fenlei.php?$id=教育教学"><img src="img/icon-tuijian.png" /></a></div>
      <div class="recommend-list">
        <ul>
          <?php 

    $sql="select * from tuijian";
	$res = $conn->query($sql);
	$row = mysqli_fetch_array($res)
	?>
       
             
          <li><a href="qikandetail.php?$id=<?php echo $row['推荐一'];?>"><?php echo $row['推荐一'];?></a></li>
          <li><a href="qikandetail.php?$id=<?php echo $row['推荐二'];?>"><?php echo $row['推荐二'];?></a></li>
          <li><a href="qikandetail.php?$id=<?php echo $row['推荐三'];?>"><?php echo $row['推荐三'];?></a></li>
          <li><a href="qikandetail.php?$id=<?php echo $row['推荐四'];?>"><?php echo $row['推荐四'];?></a></li>
          <li><a href="qikandetail.php?$id=<?php echo $row['推荐五'];?>"><?php echo $row['推荐五'];?></a></li>
          <li><a href="qikandetail.php?$id=<?php echo $row['推荐六'];?>"><?php echo $row['推荐六'];?></a></li>
        </ul>
      </div>
    </div>
  </div>
