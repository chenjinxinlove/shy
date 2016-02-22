<?php
return array(
	//'配置项'=>'配置值'
	// 配置数据库
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'shuhuayuan',
	'DB_USER' => 'root',
	'DB_PWD'  => 'root',
	'DB_PREFIX' => 'shy_',
	//设置admin的__PUBLIC__的路径
	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__' => __ROOT__.'/Admin/Home/view/Public'
		),
	// 去掉U方法的后缀
	'URL_HTML_SUFFIX' => '',
	//设置key
	'ENCRYPTION_KEY' =>'@#$ ^DD&666**%',
	//自动登录保存时间
	'AUTO_LOGIN_TIME' => time() + 3600 * 24 * 7,	//一个星期

);