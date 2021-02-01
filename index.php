<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>论文期刊网</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/nav.css" rel="stylesheet" type="text/css">
	<link href="css/index.css" rel="stylesheet" type="text/css">
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
			include 'left.php';
			include 'main.php';
			?>  
		</div>
		<?php
		include 'scroll.php';
		?>
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
</script>
<script type="text/javascript">
	var speed=20
	var marquePic2 = document.getElementById("marquePic2");
	var demo = document.getElementById("demo");
	var marquePic1 = document.getElementById("marquePic1"); 
	marquePic2.innerHTML=marquePic1.innerHTML 
	function Marquee(){ 
		if(demo.scrollLeft>=marquePic1.scrollWidth){ 
			demo.scrollLeft=0 
		}else{ 
			demo.scrollLeft++ 
		} 
	} 
	var MyMar=setInterval(Marquee,speed) 
	demo.onmouseover=function() {clearInterval(MyMar)} 
	demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
</script>