<?php 
	//设置utf-8编码
	header('Content-Type:text/html;charset=utf-8');

	//网站根目录
	define('ROOT_PATH', dirname(__FILE__));

	//模板文件目录
	define('TPL_DIR',ROOT_PATH . '/templates/');


	//编译文件目录
	define('TPL_C_DIR',ROOT_PATH . '/templates_c/');

	//缓存文件目录
	define('CACHE',ROOT_PATH . '/cache/');
 
	//引入模板类
	require ROOT_PATH . '/includes/Templates.class.php';

	//实例化模板类
	$_tpl = new Templates();

	//声明一个变量
	$_name= '贝逸潇';
	$_content = '是一个帅哥';
	$_array = array(1,2,3,4,5,6,7);

	//注入一个变量
	$_tpl->assign('name', $_name);
	$_tpl->assign('content', $_content);
	$_tpl->assign('a',5>4);
	$_tpl->assign('array', $_array);

	//载入tpl文件
	$_tpl->display('index.tpl');
 ?>