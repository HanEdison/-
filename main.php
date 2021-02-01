<?php
error_reporting(0);
include 'admin/conn.php';
?>
<div class="rightsidebar">
	<div class="comlum">
		<div class="comlum-title">教育教学<a class="more" href="fenleimediu.php?$id=教育教学"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='教育教学' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
	
	<div class="comlum">
		<div class="comlum-title">学报学刊<a class="more" href="fenleimediu.php?$id=学报学刊"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='学报学刊' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
	
	<div class="comlum">
		<div class="comlum-title">社科法制<a class="more" href="fenleimediu.php?$id=社科法制"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='社科法制' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
	
	<div class="comlum">
		<div class="comlum-title">经济管理<a class="more" href="fenleimediu.php?$id=经济管理"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='经济管理' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
	
	<div class="comlum">
		<div class="comlum-title">建筑水利<a class="more" href="fenleimediu.php?$id=建筑水利"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='建筑水利' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
	
	<div class="comlum">
		<div class="comlum-title">计算机类<a class="more" href="fenleimediu.php?$id=计算机"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='计算机' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
	
	<div class="banner2"> <img src="img/banner2.jpg"></div>
	
	<div class="comlum">
		<div class="comlum-title">农林牧渔<a class="more" href="fenleimediu.php?$id=农林牧渔"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='农林牧渔' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
	
	<div class="comlum">
		<div class="comlum-title">医药医学<a class="more" href="fenleimediu.php?$id=医药医学"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='医药医学' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
    
    <div class="comlum">
		<div class="comlum-title">文体传播<a class="more" href="fenleimediu.php?$id=文体传播"><img src="img/icon-more.gif" /></a></div>
		<div class="comlum-list">
			<dl>
				<?php 
				$sql="select 刊名,添加日期 from qikan where 所属类型='文体传播' order by 添加日期 desc limit 0,7   ";
				$res = $conn->query($sql);
				while ($row = mysqli_fetch_array($res)){
				?>
				<dt>
					<a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
						<?php echo $row['刊名'];?></a>
				</dt>
				<dd><?php echo $row['添加日期'];?></dd>
				<?php
				}
				?>
			</dl>
		</div>
	</div>
</div>