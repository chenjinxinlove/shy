<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新宏昌书画院</title>
	<script type="text/javascript" src="/shy/Public/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/shy/Public/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="/shy/Public/js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/index.css">
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/default.css"> 

</head>
<body >

	
<div id="main" >               
	<div id="head">
	<img src="/shy/Public/css/images/xyh.gif" alt="">
		<div class="word"></div>
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
		<div class="intro">
		</div>
	</div>
	<div id="content">
		<div class="content-1">
			<div class="zpzs">
				作品展示
			</div>
			<div class="gd">
				<a href="/shy/index.php/Home/Word/newwords">更多<<<</a>
			</div>
			<div class="theme-default" style="width: 400px">
				 <div id="slider" class="nivoSlider" >
					<?php if(is_array($list1)): foreach($list1 as $key=>$vo): ?><img  width="150px" src="Uploads/<?php echo ($vo["address"]); ?>"  data-thumd="/shy/Public/images/nivoSlider/nemo.jpg"><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<div class="content-2">
			<div class="zpzs">
				新闻汇
			</div>
			<div class="gd">
				<a href="/shy/index.php/Home/News/">更多<<<</a>
			</div>
			<div class="new">
				<ul>
					<?php if(is_array($list)): foreach($list as $key=>$vo): ?><li><i style="display: none">{vo.id}</i><img src="/shy/Public/css/images/xbt.gif"> <a href="/shy/index.php/Home/News/newsc?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["intro"]); ?></a> &nbsp&nbsp&nbsp&nbsp<span style="float: right "><?php echo (date("Y-m-d" , $vo["time"])); ?></span></li><?php endforeach; endif; ?>	
					
					
				</ul>
			</div>
		</div>
		<div class="content-3">
			<div class="zpzs">
				会员介绍
			</div>
			<div class="gd">
				<a href="/shy/index.php/Home/Content/huiyuanintro">更多<<<</a>
			</div>
			<div >
				<img style="margin-left: 36px;margin-top: -19px" src="/shy/Public/css/images/furen.png">
			</div>
		</div>
		<div class="content-4">
			<div class="zpzs">
				书院介绍
			</div>
			<div class="gd">
				<a href="/shy/index.php/Home/Content/shuyaunintro">更多<<<</a>
			</div>
			<div class="video">
				<embed src="http://player.youku.com/player.php/sid/XMzI2NTc4NTMy/v.swf" 
				width="420" height="270" 	
				type="application/x-shockwave-flash">
				</embed>
			</div>
		</div>
	</div>
	<div id="footer">
	</div>
</div>
	

	
</body>
</html>