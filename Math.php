<?php 
	$a = '123';

	if(is_numeric($a)){
		echo "a是一个数字";
	}else {
		echo "a不是一个数字";
	}

	echo "<br/>";
	//如果是真返回1.否则返回空
	if(is_int($a)){
		echo 'a是一个整数';
	}else {
		echo 'a不是一个整数';
	}


	//echo rand(0, 10);
	echo mt_rand(0, 100) . "<br/>";

	echo getrandmax();//得到无参数情况下的最大随机值

	echo mt_getrandmax() . '<br/>';

	$i = 123456789.36589;
	$si = number_format($i, 2);

	echo $si;

	echo "<br/>";

	echo abs(-12.5) . "<br/>";

	$hexadecimal = 'A37334';

	echo base_convert($hexadecimal, 16, 10) . "<br/>";//在任意进制之间转换数字

	echo bindec('10000') . '<br/>';//二进制转换为十进制

	echo decbin('64') . "<br/>";//十进制转换成二进制

	echo dechex('56847') . "<br/>";//十进制转换成十六进制

	echo decoct('15') . "<br/>";//十进制转换成八进制

	echo deg2rad(180) . "<br/>";//角度转换为弧度

	echo exp(6) . '<br/>';

	echo fmod(7,2) . "<br/>";//两数相除得到的余数

	echo hypot(3, 4) . '<br/>';//计算一直角三角形的斜边长度

	if(is_infinite($a)){
		echo "a 不是有限值";
	}else{
		echo "a是有限值";
	}

	echo "<br/>";

	echo pi( )  . "等同于" . M_PI . "<br/>";

	var_dump(pow(2, 8));

	echo "<br/>" . pow(-1, 20);
	echo "<br/>" . pow(0, 0);
	echo "<br/>" . pow("adasd" , 4) . "<br/>";

	echo rad2deg(M_PI_4) . "<br/>";

	echo round(2.5) . "<br/>";

	echo sqrt(9);
 ?>