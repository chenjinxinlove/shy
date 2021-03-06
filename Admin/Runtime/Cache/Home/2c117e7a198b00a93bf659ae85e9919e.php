<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>登录</title>
		<meta name="keywords" content="BootstrapÄ£°æ,BootstrapÄ£°æÏÂÔØ,Bootstrap½Ì³Ì,BootstrapÖÐÎÄ" />
		<meta name="description" content="Õ¾³¤ËØ²ÄÌá¹©BootstrapÄ£°æ,Bootstrap½Ì³Ì,BootstrapÖÐÎÄ·­ÒëµÈÏà¹ØBootstrap²å¼þÏÂÔØ" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="/shy/Admin/Home/view/Public/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/shy/Admin/Home/view/Public/css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" href="/shy/Admin/Home/view/Public/css/ace.min.css" />
		<link rel="stylesheet" href="/shy/Admin/Home/view/Public/css/ace-rtl.min.css" />
		
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">新宏昌书画院欢迎您</span>
									<span class="white"></span>
								</h1>
								<h4 class="blue">&copy; HCTM</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												请输入您的账户与密码
											</h4>

											<div class="space-6"></div>

											<form class="form_validate" method="post" action="<?php echo U('Login');?>">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" id="username" name="username" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>
													<div>	<!-- 验证码 -->
														<h4 class="header blue lighter bigger">
															<i class=" green"></i>
																			验证码：
															<img src="<?php echo U('verify');?>" width='80' height='25' id='verify-img'/>
														</h4>
														
						                                <input type="text" name='verify' class='form-control' id='verify'
													</div>
													<div class="space"></div>
													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" id="checkbox" name="checkbox" /> 
															<span class="lbl"> 记住我</span>
														</label>
														
														<button type="button" class="width-35 pull-right btn btn-sm btn-primary" id="button_click">
															<i class="icon-key"></i>
															登录
														</button>
													</div>
													<span class="alert_span"></span>
													<div class="space-4"></div>
												</fieldset>
											</form>
<!-- 
											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="social-login center">
												<a class="btn btn-primary">
													<i class="icon-facebook"></i>
												</a>

												<a class="btn btn-info">
													<i class="icon-twitter"></i>
												</a>

												<a class="btn btn-danger">
													<i class="icon-google-plus"></i>
												</a>
											</div>
										</div>

										<div class="toolbar clearfix">
											<div>
												<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
													<i class="icon-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
													I want to register
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
 -->
								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="icon-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="icon-lightbulb"></i>
															Send Me!
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												Back to login
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" />
															<i class="icon-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="icon-refresh"></i>
															Reset
														</button>

														<button type="button" class="width-65 pull-right btn btn-sm btn-success">
															Register
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<i class="icon-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<script type="text/javascript" src='/shy/Admin/Home/view/Public/js/jquery-2.0.3.min.js'></script>
		<script type="text/javascript" src="/shy/Admin/Home/view/Public/js/admin/jquery-validate.js"></script>
		<script type="text/javascript" src='/shy/Admin/Home/view/Public/js/admin/md5-min.js'></script>
		<script type="text/javascript" src="/shy/Admin/Home/view/Public/js/admin/login.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/shy/Admin/Home/view/Public/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/shy/Admin/Home/view/Public/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
		  $("#password").change(function () {
			var password = $(this).val();
			$(this).val(hex_md5(password));
			});
		  var Login = "<?php echo U('Login');?>";
		  var Index = '/shy/admin.php';
		</script>
		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>