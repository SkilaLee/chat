<?php 
	header("content-type:text/html;charset=utf8");

	//定义css,js,img常量,方便后期维护
	define("SITE_URL","http://localhost/test/chat/chat");
	
	define("CSS_URL",SITE_URL."/public/Home/css");
	define("JS_URL",SITE_URL."/public/Home/js");
	define("IMG_URL",SITE_URL."/public/Home/image");

	//view 常量
	define("VIEW", SITE_URL."/index.php/Home");
	//把目前tp模式由生成模式变为开发模式
	define ("APP_DEBUG",true);
	//引入框架的核心程序
	require "../thinkPHP/ThinkPHP/ThinkPHP.php";
