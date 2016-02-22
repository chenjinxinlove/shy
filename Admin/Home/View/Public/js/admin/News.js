$(function () {
	//删除
	
	$('.news_del').click(function () {
		if (confirm('确定删除吗？')) 
			{
				var id = $('.news_id').html();
				$.post(news_del, {'id' : id}, function(data) {
				if (data) {
					alert('删除成功！');
					location.href =index;
				}else{
					alert('删除失败！');
					location.href =index;
				}
				});
			};
		
	});

	//关闭
	
	$('.news_close').click(function() {
		if (confirm('你确定关闭吗？')) 
			{
				var id = $('.news_id').html();
				$.post(news_close, {'id' : id}, function(data) {
					if(data) {
						alert('关闭成功！');
						location.href =index;
					}else{
					alert('删除失败！');
					location.href =index;
				}
				});
			};
	});
		

	//修改
	
	// $('.news_alert').click(function() {
	// 	if (confirm('你确定修改吗？')) {
	// 		var id = $('.news_id').html();
	// 	url = news_alert + '?id=' +id;
	// 	location.href = url ;
	// 	}
		
		
	// });
}) ;