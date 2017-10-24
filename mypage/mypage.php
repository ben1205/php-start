<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>标题</title>
	<style>
		ul,li{
			list-style: none;
			margin:0;
			padding:0;
		}
		#page li{
			width:500px;
			line-height: 50px;
			font-size:16px;
			color: #555;
			border: 1px solid #dcdcdc;
		}
		.uid{
			color:red;
			margin: 0  20px;
		}
	</style>
</head>
<body>
	<?php 
	/*1.传入页码*/

	$page = isset($_GET['p']) ? deal($_GET['p'], 6) : 1;

	$pageSize = 5;
	$showPage = 5;

	//2.根据页码取出数据：php->mysql
	$host = 'localhost';
	$username = 'root';
	$password = '661107';
	$db = 'mydb';

	$conn = new mysqli($host, $username, $password);
	if(!$conn){
		echo '数据库链接失败';
		exit;
	}

	$conn->select_db($db);
	$conn->query('set names utf8');

	//编写sql获取分页数据SELECT * FROM 表名 LIMIT 起始位置 , 显示条数
	$sql = "SELECT * FROM  page LIMIT " . ($page - 1) * $pageSize . ", {$pageSize}";
	$total_sql = 'SELECT COUNT(*) FROM page';
	$result_num = $conn->query($total_sql);
	$length = $result_num->fetch_array();//总条数
	
	//计算页数
	$total_pages = ceil($length[0]/$pageSize);
	function retotal($a){
		return $a;
	}
	$result = $conn->query($sql);

	//处理数据源
	echo "<ul id=\"page\">";
	while($row =  $result->fetch_assoc()){
		echo '<li><span class="uid">'. $row["uid"] .'</span><span>' . $row['username']. '</span></li>';
	}
	echo "</ul>";

	$result->free_result();
	$conn->close();

	/* 3 . 显示数据 + 分页条*/
	$page_banner = '';
	//计算偏移量
	$pageoffset = ($showPage - 1)/2;
	//初始化数据
	$start = 1;
	$end = $total_pages;

	function deal($a, $b){
		if($a <= 0){
			return 1;
		}else if($a > $b){
			return $b;
		}else{
			return $a;
		}
	}

	if($page > 1){
		$page_banner .= '<a href = "'. $_SERVER['PHP_SELF'].'?p=1">首页</a>';
		$page_banner .= '<a href = "'. $_SERVER['PHP_SELF'].'?p=' . ($page - 1) .'">上一页</a>';
	}

	if($total_pages > $showPage){

		if($page > $pageoffset + 1){
			$page_banner .= "...";
		}

		if($page > $pageoffset){
			$start = $page - $pageoffset;
			$end = $total_pages > $page + $pageoffset ? $page + $pageoffset : $total_pages;
		}else {
			$start = 1;
			$end = $total_pages > $showPage ? $showPage : $total_pages;
		}

		if($page + $pageoffset > $total_pages) {
			$start = $start - ($page + $pageoffset - $end);
		}

	}

	for($i = $start; $i <= $end; $i++){
		$page_banner .= '<a href = "'. $_SERVER['PHP_SELF'].'?p=' . $i .'">'.$i.'</a>';
	}

	if($total_pages > $showPage && $total_pages > $page + $pageoffset){
		$page_banner .= "...";
	}

	if($page < $total_pages){
		$page_banner .= '<a href = "'. $_SERVER['PHP_SELF'].'?p=' . ($page + 1) .'">下一页</a>';
		$page_banner .= '<a href = "'. $_SERVER['PHP_SELF'].'?p='.($total_pages).'">尾页</a>';
	}
	$page_banner .= "共{$page}/{$total_pages}页";
	$page_banner .= "<form action='mypage.php'>";
	$page_banner .= "到第<input type='text' size='2' name='p'>页";
	$page_banner .= "<input type='submit' value='确定'>";
	$page_banner .= "</form>";
 	echo $page_banner;
 ?>	
</body>
</html>

