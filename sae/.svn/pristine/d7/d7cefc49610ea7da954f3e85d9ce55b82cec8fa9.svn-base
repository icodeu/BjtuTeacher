<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>rank</title>
</head>

<body background="images/rank_bg.png">
    <div class="container">
    	<center><img src="images/rank_title.png" width="300"/></center>
    <?php
   		include "mysql_connect.php";
        $result = mysql_query("select * from teacher order by total desc");
	    echo '<table class="table table-bordered">';
		echo '<tr><th>教师</th><th>花</th><th>贺卡</th><th>润喉茶</th><th>总</th></tr>';
		$i = 1;
        while ($row = mysql_fetch_array($result))
        {
        	$viewName = $row['teaName'];
        	if($i<4){
				echo '<tr class="danger">';
	            echo '<td>'.'<a href=view.php?teaName='.$viewName.'>'.$row['teaName'].'</a>'.'</td>'.'<td>'.$row['flower'].'</td>'.'<td>'.$row['card'].'</td>'.'<td>'.$row['tea'].'</td>'.'<td>'.$row['total'].'</td>';
	            echo "</tr>";
			}else{
				echo '<tr>';
	            echo '<td>'.'<a href=view.php?teaName='.$viewName.'>'.$row['teaName'].'</td>'.'<td>'.$row['flower'].'</td>'.'<td>'.$row['card'].'</td>'.'<td>'.$row['tea'].'</td>'.'<td>'.$row['total'].'</td>';
	            echo "</tr>";
			}
        }
	?>
	</div>
</body>
</html>