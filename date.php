<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
   /*
	*date_default_timezone_set();
	*date_default_timezone_get();//得到当前时区
	*亚洲时区:
	*PRC 中华人民共和国
	*Asia/Shanghai 中国/上海
	*1.修改
   */
	echo date_default_timezone_get();
	date_default_timezone_set("PRC");//设置时区是必须的，不然会报警告
	echo date_default_timezone_get() . "<br/>";
	echo date("Y/m/d/H/i/s"). "<br/>";
	echo date("Y年m月d日")."<br/>";
	echo date("Y.m.d"). "<br/>";
	echo date("Y-m-d");

	//y2位的年份，n不带前导零的月份，j不带前导零的天数
	echo '<br/>';
	echo date('y-n-j') . "<br/>";
	echo date("H:i:s a") . "<br/>";

	//检测是否是闰年
	$year = date('Y');
	if($year%4==0&&($year%100!=0||$year%400==0)){
		echo $year . '是闰年';
	}else{
		echo $year . '不是闰年';
	}

	echo '<hr/>';
	$res = date('L')? '是闰年' : '不是闰年';
	echo $res;
	echo "<br/>";
	echo '当天是全年的第' . date("W") . "周<br/>";
	echo "今年的第" . date('z') . "天<br/>";
	echo "当前月份有" . date('t') . "天<br/>";
?>
<?php 
	echo "<hr/>";
	//时间戳
	echo time();
	echo date('Y-m-d H:i:s') . "<br/>";
	echo date('Y-m-d H:i:s', time()) . "<br/>";
	echo '<hr/>';
	echo '一天之后的这个时间为:' . date('Y-m-d H:i:s', time()+24*3600) . '<br/>';
 	echo "<hr/>";
 	//mktime(h, i, s , n, j, Y):得到指定日期的时间戳
 	//2017 10 18 0 0 0
 	echo mktime(0, 0, 0, 8, 12, 2017);
 	echo '<br/>';
 	echo date("Y-m-d H:i:s", mktime(0,0,0)) . "<br/>";

 	//计算两个日期的时间差
 	$birth = mktime(0, 0, 0, 5, 12, 1993);
 	$time = time();
 	$age= floor(($time-$birth)/(24*3600*365));
 	echo $age;
 ?>

 <?php
 	//strtotime将任何字符串的日期时间描述为时间戳
 	echo '<br/>';
 	echo time(), '<br/>';
 	echo strtotime('now') , '<br/>';
 	echo date('Y-m-d H:i:s', strtotime('+1 day')), '<br/>';
 	echo date('Y-m-d H:i:s', strtotime('+1 day')), '<br/>';
 	echo date('Y-m-d H:i:s', strtotime('+1 day')), '<br/>';
 	echo date('Y-m-d H:i:s', strtotime('+2 years +3 months +4 days')), '<br/>';
 ?>

 <?php 
 	//microtime
 	echo microtime() . "<br/>";
 	echo time() . "<br/>";
 	echo microtime(true) . '<br/>';
 	echo '<hr/>';
 	$start = microtime(true);
 	for($i=1;$i<=10;$i++)
 	{
 		$arr[ ] = $i;
 		var_dump($arr);
 	}
 	$end= microtime(true);
 	echo '程序执行时间：' . round($end-$start, 4);
  ?>
  <?php 
  	echo "<br/>";
  	print_r(getdate());
  	//验证输入时间是否合法
  	var_dump(checkdate(18, 24, 2017));
   ?>
</body>
</html>