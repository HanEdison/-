<div class="container">
	<div class="showlist-title">
	  <a id="title-detail">期刊展示</a><a class="more" href="fenlei.php?$id=教育教学"><img src="img/icon-more.gif" /></a>
	</div>
	<div id=demo style="overflow:hidden;width:750;" align=center>
		<table border=0 align=center cellpadding=1 cellspacing=1 cellspace=0 >
			<tr>
				<td valign=top bgcolor=ffffff id=marquePic1><table width='100%' border='0' cellspacing='0'>
					<tr>
						<?php
						error_reporting(0);
						include 'admin/conn.php';
						$sql="select * from qikan";
						$res = $conn->query($sql);
						while ($row = mysqli_fetch_array($res)){
						?>
						<td align=center><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>">
							<img src="uploadfile/images/<?php echo $row['图片URL'];?>" width=140 height=210 border=0><br><br></a>
						</td>
						<?php
						}
						?>
					</tr>
					</table>
				</td>
				<td id=marquePic2 valign=top></td>
			</tr>
		</table>
	</div>
</div>
