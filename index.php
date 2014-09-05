<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<title>
			交大教师节
		</title>
	</head>
	<style type="text/css">
	  .total{font-size: xx-large; color: red;}
	</style>
	<body>
		<div id="background" style="position:absolute; width:100%; height:100%; z-index:-1">    
			<img src="images/index_bg.png" height="100%" width="100%"/>    
		</div>
		<div class="container">
			<br /><br />
			<center><img src="images/index_title.png" width="300"/></center>
			
			
			<center><a href="bless.php"><img src="images/heart.png" width="180"/></a></center>
			
			
			
			
		<?php
			include 'mysql_connect.php';
			$result = mysql_query("select * from student");
			$total = mysql_num_rows($result);
		?>	
			<center>已有<span class="total"><?php echo $total ?></span>位交大同学参与送祝福</center>
			<center><a href="rank.php" class="btn btn-success">查看祝福榜</a></center>
			
			<br /><br />
			<div class="alert alert-success" role="alert">
				北京交通大学官方微信<br />
				微信公众账号: bjtuweixin
			</div>
			
		</div>
	</body>
</html>
