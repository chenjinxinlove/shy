/*
首页
 */
$(document).ready(function() {
	/**
	 * 导航
	 * @param  {[type]} ) {		$(this).find("ul").show();	} [找到nav]
	 * @return {[type]}   [description]
	 */
	$(".nav-2,.nav-3").mouseover(function() {
		$(this).find("ul").show();
	});
	$(".nav-2,.nav-3").mouseout(function() {
		$(this).find("ul").hide();
	});

	/**
	 * 轮播轮显示五个使用nivoSlider插件
	 */
	$('#slider').nivoSlider
	(
		{
			// manualAdvance: true,//图片随机切换效果
			// effect: 'boxRandom',//需要手动切换
			// animSpeed:'1000'

		}
	);
	slider.init({'id': $('#PicSlide'), way:'left', interval: 4000});
	
	
});