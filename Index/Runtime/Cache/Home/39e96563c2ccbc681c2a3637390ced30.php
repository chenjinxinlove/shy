<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>宏昌印象-作品赏析</title>
	<script type="text/javascript" src="/shy/Public/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/shy/Public/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="/shy/Public/js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/index.css">
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/default.css"> 
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/HcImpressionYZ.css">
</head>
<body >
<div id="main">               
	<div id="head">
	<img src="/shy/Public/css/images/xyh.gif" alt="">
		<div class="word">
			
		</div>
			<div class="nav">
			<ul>
				<li class="nav-1" ><a href="/shy/index.php">首页</a></li>
				<li class="nav-2"><a href="">宏昌印象</a>
					<ul class="xcxy">
						<li><a href="/shy/index.php/Home/Content/HcImpressionYZ">院长介绍</a></li>
						<li><a href="/shy/index.php/Home/Content/shuyaunintro">书院介绍</a></li>
						<li><a href="/shy/index.php/Home/Content/huiyuanintro">会员介绍</a></li>
					</ul>
				</li>
				<li class="nav-3"><a href="">文墨留声</a>
					<ul class="wmls">
						<li><a href="/shy/index.php/Home/Word/words">作品赏析</a></li>
						<li><a href="/shy/index.php/Home/Word/newwords">最新作品</a></li>
					</ul>
				</li>
				<li class="nav-4"><a href="/shy/index.php/Home/News/">新闻汇</a></li>
				<li class="nav-5"><a href="/shy/index.php/Home/Content/contactUs">联系我们</a></li>
			</ul>
		</div><!-- nav" -->
	</div>
	<div id="content_YZ_words">
		<div class="wz">
			<span style="padding-left: 100px ;font-size:15px"><b>您的位置：作品赏析</b></span>
			
		</div>
		<!-- Banner -->
			<div class="theme-default" style="width:860px ; margin-left: 65px">
				<div id="slider" class="nivoSlider" >
					<?php if(is_array($list1)): foreach($list1 as $key=>$vo): ?><img  src="/shy/Uploads/<?php echo ($vo["address"]); ?>"  data-thumd="/shy/Public/images/nivoSlider/nemo.jpg"><?php endforeach; endif; ?>
				</div>
			</div>
			
		<!-- @end Banner -->
	</div>
	<div id="footer_YZ"></div>
</div>
	
</body>
</html>