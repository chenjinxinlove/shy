
$(function () {
		/**
		 * 	验证码自动刷新
		 * @type {[type]}
		 */
		var imgAdr = $("#verify-img").attr('src');
		$("#verify-img").click(function() {
			$(this).attr('src', imgAdr + '/' + Math.random());
		});


		$('#button_click').click(function () {
			
			var username = $('#username').val();
			var password = $('#password').val();
			var verify   = $('#verify').val();
			var checkbox = $('#checkbox').is(':checked');
			$.post(Login, {username: username , password: password , verify: verify , checkbox: checkbox}, function(data) {
				var type = Number(data)
				var value ='';
				switch(type)
				{
					case 0:
					value = '验证码不正确';
					$('.alert_span').html(value);
				 break;
				    case 1:
				    value = '用户名或密码错误';
				    $('.alert_span').html(value);
				 break;
				    case 2:
				    value = '您的账户已被锁定';
				    $('.alert_span').html(value);
				 break;
				    case 3:
				    value = '登录成功';
				    $('.alert_span').html(value);
				    location.href =Index;
				 break;

				}
				
			}); 
		});
		

		
});