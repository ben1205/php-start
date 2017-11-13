<?php 
	$path = 'C:\AppServ\www\BOB1\demo1.php';

	//获取路径文件的信息
	print_r(pathinfo($path));

	//获取绝对路径
	$path1 = 'cookie.php';

	echo realpath($path1) . "<br/>";

	echo round((filesize($path1)/1024), 2) . "KB<br/>";

	//查看磁盘剩余的空间
	echo round(disk_free_space('C:')/1024/1024/1024, 2) . 'GB<br/>';

	//查看磁盘总空间
	echo round(disk_total_space('C:')/1024/1024/1024, 2) . "GB";
	
	date_default_timezone_set('Asia/Shanghai');
	echo date_default_timezone_get() . '<br/>';
	//echo fileatime($path1);

	//获取最后的访问时间，文件最后访问的时间
	echo date('Y-m-d H:i:s', fileatime($path1)) . '<br/>';

	//获取最后的改变时间,所有者权限的修改
	echo date('Y-m-d H:i:s', filectime($path1)) . '<br/>';

	//获取最后的修改时间,文件里面的内容修改的时间
	echo date('Y-m-d H:i:s', filemtime($path1)) . '<br/>';
 ?>