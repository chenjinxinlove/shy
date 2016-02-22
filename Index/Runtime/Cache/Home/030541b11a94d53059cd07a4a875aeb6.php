<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>宏昌印象-最新作品</title>
	
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/index.css">
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/default.css"> 
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/HcImpressionYZ.css">
	<link rel="stylesheet" type="text/css" href="/shy/Public/css/lrtk.css">
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
			<span style="padding-left: 100px ;font-size:15px"><b>您的位置：最新作品</b></span>
			
		</div>
		<!-- Banner -->
		<div id="PicSlide">
		<div style="HEIGHT: 560px; PADDING-TOP: 20px" class="wrap picshow"><!--大图轮换区-->
			<div id="picarea">
				<div style="MARGIN: 0px auto; WIDTH: 774px; HEIGHT: 436px; OVERFLOW: hidden">
					<div style="MARGIN: 0px auto; WIDTH: 774px; HEIGHT: 436px; OVERFLOW: hidden" id="bigpicarea">
						<p class=bigbtnPrev><span id="big_play_prev"></span></p>
							<?php if(is_array($list1)): foreach($list1 as $key=>$vo): ?><div id="image_xixi-0<?php echo ($vo["upload_id"]); ?>" class="image">
								<a href="#" target="_blank">
									<img alt="" src="/shy/Uploads/<?php echo ($vo["address"]); ?>" width="772" height="434">
								</a> 
								<div class=word>
									<h3></h3>
								</div>
							</div><?php endforeach; endif; ?>
						<p class=bigbtnNext><span id="big_play_next"></span></p>
					</div>
				</div>
		



				<div id="smallpicarea">
					<div id="thumbs">
							<ul>
							  <li class="first btnPrev"><img id="play_prev" src="/shy/Public/css/images/words/left.png"></li>
							  <?php if(is_array($list2)): foreach($list2 as $key=>$vo): ?><li class=slideshowItem>
								  <a id="thumb_xixi-0<?php echo ($vo["upload_id"]); ?>" href="#"><img src="/shy/Uploads/<?php echo ($vo["address"]); ?>" width="90" height="60"></a>
								  </li><?php endforeach; endif; ?>
							  <li class="last btnNext"><img id="play_next" src="/shy/Public/css/images/words/right.png"></li>
							</ul>
					</div>
				</div>
			</div>
				<script>
				var target = ["xixi-01","xixi-02","xixi-03","xixi-04","xixi-05","xixi-06","xixi-07"];
				</script>
		
		</div>
		<!-- @end Banner -->
	</div>
	<div id="footer_YZ"></div>
</div>
	<script type="text/javascript" src="/shy/Public/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/shy/Public/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="/shy/Public/js/jquery.ad-gallery.pack.js"></script>
	<script type="text/javascript" src="/shy/Public/js/zzsc.js"></script>
	<script type="text/javascript" src="/shy/Public/js/index.js"></script>
</body>
</html>