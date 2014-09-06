<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>查看祝福</title>
</head>

<body background="images/rank_bg.png">
	<img src="images/logo.png" width="1"/>
    <div class="container">
    	<center><img src="images/rank_title.png" width="300"/></center>
    	
    	<?php
			include 'mysql_connect.php';
			$teaName = $_GET['teaName'];
			$count_result = mysql_query("select count(*) from student where teaName = '$teaName'");
			$count_row = mysql_fetch_array($count_result);
			echo '<center><h3>'.$teaName.'老师收到的祝福'.'<span class="label label-default">'.$count_row[0].'</span></h3></center>';
			$result = mysql_query("select * from student where teaName = '$teaName'");
			$i = 0;
			$comment_flag = false;
			while ($row = mysql_fetch_array($result)){
				if($row['comment']=='')
					break;
				$comment_flag = true;
				if ($i%5==0)
					echo '<div class="panel panel-success">';
				else if($i%5==1)
					echo '<div class="panel panel-primary">';
				else if($i%5==2)
					echo '<div class="panel panel-info">';
				else if($i%5==3)
					echo '<div class="panel panel-warning">';
				else if($i%5==4)
					echo '<div class="panel panel-danger">';					
				echo 
					'
						<div class="panel-heading">'.'<span class="glyphicon glyphicon-user"></span> 我是'.
							$row['stuName']
						.'</div>
						<div class="panel-body">'.
							$row['comment']
						.'</div>
					</div>';
				$i++;
			}
			if($comment_flag==false){
				echo "暂时没收到文字祝福~";
			}	
    	?>    	
    	<input type="text" name="teaName" id="teaName" value="<?php echo $teaName ?>" hidden="hidden"/>

	</div>
</body>
<script type="text/javascript" charset="utf-8">
			var teacher = document.getElementById('teaName').value;
		  	document.title = "交大的同学们：我送给 " + teacher + " 老师一份祝福，快来帮助老师上头条吧！";
</script>
</html>