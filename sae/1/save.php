<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>保存数据</title>
</head>
<body>
<?php
	$stuName = $_GET['stuName'];
	$teaName = $_GET['teaName'];
	$gift = $_GET['gift'];
	$comment = $_GET['comment'];
	include 'mysql_connect.php';
	//插入student的表
	mysql_query("insert into student (stuName, teaName, gift, comment) values ('$stuName', '$teaName', '$gift', '$comment')") or die(mysql_error());
	
	//处理teacher的表	
	$result = mysql_query("SELECT COUNT(*) FROM teacher WHERE teaName='$teaName'");
	$row = mysql_fetch_array($result);
	if($row[0]==0){//该教师第一次被祝福
		mysql_query("INSERT INTO teacher(teaName, flower, card, tea, total) VALUES ('$teaName', 0, 0, 0, 0)") or die(mysql_error());
	}else{//该教师之前被祝福过 更新相应数据
		$result = mysql_query("SELECT * FROM teacher WHERE teaName='$teaName'");
		$row = mysql_fetch_array($result);
		//祝福总数加1
		$total = $row['flower'] + $row['card'] + $row['tea'] + 1;
		mysql_query("update teacher set total = '$total' where teaName = '$teaName'");
		//如果被送花 
		if($gift == "flower"){
			$gift_number = $row['flower'] + 1;
			mysql_query("update teacher set flower = '$gift_number' where teaName = '$teaName'");
		}//如果被送贺卡
		else if($gift == "card"){
			$gift_number = $row['card'] + 1;
			mysql_query("update teacher set card = '$gift_number' where teaName = '$teaName'");
		}//如果被送润喉茶
		else if($gift == "tea"){
			$gift_number = $row['tea'] + 1;
			mysql_query("update teacher set tea = '$gift_number' where teaName = '$teaName'");
		}
	}
	echo "<script language='javascript' type='text/javascript'>";
	echo '
			var index_url = "index.php";
			window.location.href = index_url;
		';
	echo "</script>";
?>
</body>
</html>