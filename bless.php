<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<title>
			送祝福
		</title>
	</head>
	<script>
		function doCheck() {
		var flag = 1;
		if (document.register.stuName.value == "") {
			alert('您怎么称呼呢~');
			flag = 0;
		}
		if (document.register.teaName.value == "") {
			alert('尊师怎么称呼呢~');
			flag = 0;
		}
		if (flag == 1)
			return true;
		else return false;
		}
	</script>
	<body>
		<div id="background" style="position:absolute; width:100%; height:100%; z-index:-1">    
			<img src="images/index_bg.png" height="100%" width="100%"/>    
		</div>
		<div class="container">
			<br /><br />
			<center><img src="images/index_title.png" width="300"/></center>
			
			<br />
			<center><img src="images/bless_title.png" width="300"/></center>
				
			<form action="save.php" method="get" onsubmit="return doCheck()" name="register">
			  我是
			  <input type="text" name="stuName" id="stuName" size="5"/><br /><br />
			  祝福我的老师
			  <input type="text" name="teaName" id="teaName" size="5"/><br /><br />
			  送给我的老师<br />
			  <input type="radio" name="gift" value="flower"  checked="checked"/> 一朵鲜花&nbsp;&nbsp;
			  <input type="radio" name="gift" value="card"/> 一张贺卡&nbsp;&nbsp;
              <input type="radio" name="gift" value="tea"/> 一杯润喉茶<br /><br />
                            留下对老师的祝福:<br />
              <textarea name="comment" rows="5" cols="40"></textarea><br />
			  <center><input type="submit" value="提交" class="btn btn-success btn-lg"/></center>
			</form>
		</div>
	</body>
</html>
