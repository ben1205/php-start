<?php 
	include 'library/tool.library.php';//如果文件不存在，只会警告，后面的代码仍会执行
	require 'library/tool.library.php';//如果文件不存在，会直接报错，后面的代码就会被终止，推荐使用

	//include_once 'library/tool.library.php';//只调用一次该文件
	
	//标准函数，内置函数

	echo md5('123456');

	echo '<br/>';

	$prices = 50;
	$tax = 0.5;

	//函数里的变量和函数外的变量没有任何关系，局部作用域
	function functionPrices( & $prices, $tax) {


		$prices = $prices + $prices*$tax;//75
		$tax = $tax*$tax;
	}

	functionPrices($prices, $tax);

	echo $prices;


	function changetax() {
		$GLOBALS['tax'] = 0.9;
	}
	changetax();

	echo $tax . "<br/>";

	echo functionPi();
 ?>