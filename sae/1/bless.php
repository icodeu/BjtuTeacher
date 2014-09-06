<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/sharemcover.css"/>
		<link rel="stylesheet" type="text/css" href="css/playAudio.css"/>
		<script type="text/javascript" src="http://wxfile.2sky.cn/card3/js/jquery.min.js"></script>
    	<script src="http://wxfile.2sky.cn/card3/js/audio.js" type="text/javascript"></script>
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
		
		function showGuide(){
			document.getElementById('sharemcover0').style.display='block';
			sleep(1);
		}
		
		  function sleep(n)
  		  {
		    var start=new Date().getTime();
		    while(true) if(new Date().getTime()-start>n) break;
		  }
	</script>
	<style type="text/css">
	  .line{background-color: transparent;border-left-style: none;border-right-style: none;border-top-style: none;border-bottom-color: #000609;    color: #FFFF00;font-weight:bolder;font-size: xx-large;}
/*	  .line{background-color: transparent; }*/
	  /*.textareabg{background-image: url(images/textarea_bg_new.png);background-repeat: no-repeat;}*/
	 .myspan{font-weight: bolder; color: #3D00F5; font-size: larger;}
	  	#sharemcover0 img {
	    position: fixed;
	    right: 0;
	    top: 5px;
	    width: 100%!important;
	    z-index: 20001;}
	</style>
	<body>
		<span id="playbox" class="btn_music on" onClick="playbox.play();return false;">
   			<!--{<span id="playbox" class="btn_music" onClick="playbox.init(this).play();return false;">}-->
   			<audio src="http://music.2sky.cn/card2/mp3/0/19.m4a" loop id="audio" autoplay="autoplay"></audio>
   		</span>
		<div id="background" style="position:absolute; width:100%; height:100%; z-index:-1">    
			<img src="images/background.jpg" height="100%" width="100%"/>    
		</div>
		<div id="sharemcover0" class="sharemcover" onClick="document.getElementById('sharemcover0').style.display='';" style=" display:none">
        	<img src="images/guide.png" style="width:100%;heigth:100%;">
    	</div>
    	
		<div class="container">
			<br /><br />
			<center><img src="images/index_title.png" width="300"/></center>
			
			<br />
			<!--<center><img src="images/bless_title.png" width="300"/></center>-->
				
			<form action="save.php" method="post" onsubmit="return doCheck()" name="register">
			  <span class="myspan">我是【</span>
			  <input type="text" name="stuName" id="stuName" size="5" class="line"/><span class="myspan">】</span><br />
			  <span class="myspan">祝福我的老师【</span>
			  <input type="text" name="teaName" id="teaName" size="5" class="line"/><span class="myspan">】</span><br />
			  <span class="myspan">送给我的老师</span><br />
			  <input type="radio" name="gift" value="flower"  checked="checked"/> 一朵鲜花<img src="images/flower.png" width="30"/>&nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="radio" name="gift" value="card"/> 一张贺卡<img src="images/card.png" width="40"/><br />
              <input type="radio" name="gift" value="tea"/> 一杯润喉茶<img src="images/tea.png" width="40"/><br /><br />
                            留下对老师的祝福:<br />
              <textarea name="comment" rows="2" cols="40"></textarea><br />
			  <center><input type="submit" value="提交" class="btn btn-success btn-lg" onClick="showGuide()"/></center>
			</form>
		</div>
	</body>
</html>
