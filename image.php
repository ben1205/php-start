 <?php 
 	//微缩图，不但表面的大小改变了，容量也改变
	ob_clean();
	header("Content-Type: image/png");
	define('__DIR__', dirname(__FILE__) .'\\');

	list($width, $height) = getimagesize(__DIR__ . '01.png');

	//将原图缩放成原来的0.4倍
	$_width = $width * 0.4;
	$_height = $height * 0.4;

	//创建一个新图
	$im = imagecreatetruecolor($_width, $_height);

	//载入原图，将原图复制到新图上去
	$_im = imagecreatefrompng(__DIR__ . '01.png');

	//将原图重新采样，拷贝到新图上，最后按0.4的比例输出
	imagecopyresampled($im, $_im, 0, 0, 0, 0, $_width, $_height, $width, $height);

	//将新图输出
	imagepng($im);
	//销毁
	imagedestroy($im);
	imagedestroy($_im);
  ?>
<?php 
	//创建图像的一般流程：
	//1.设定标头，告诉浏览器你要生成的MIME类型
	//2.创建一个图像区域，以后的操作都将基于此图像区域
	//3.在空白图像区域绘制填充背景
	//4.在背景上绘制图形轮廓输入文本
	//5.输出最终图形
	//6.清除所有资源
	//7.其他页面调用图像

	
	//一般生成的图像可以是png,jpg,gif,bmp

	//第一步,设置文件MIME类型，输出类型

	// for($Tmpa = 0;$Tmpa<4;$Tmpa++){
	// 	$nmsg .= dechex(rand(0,15));
		
	// }

	// ob_clean();
	// header("Content-Type: image/png");
	// $im = imagecreatetruecolor(72, 25);
	// $blue = imagecolorallocate($im, 0, 102, 255);
	// $white = imagecolorallocate($im, 255, 255, 255);

	// imagefill($im, 0, 0, $blue);
	// imagestring($im,5,20,5,$nmsg,$white);

	// imagepng($im);
	// imagedestroy($im);
 ?>
