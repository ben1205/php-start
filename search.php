<?php 
	//print_r($_GET["keywords"]);
	//屏蔽所有错误
	//error_reporting(0);//开发环境中，不建议使用

	$keywords = isset($_POST["keywords"]) ? trim($_POST["keywords"]) : '';
	echo '查询关键词: ' . $keywords . '<br/>';

	//链接数据库
	$conn = new mysqli('localhost', 'root', '661107');

	//print_r($conn);
	$conn->query('use mydb');
	$conn->query('set names utf8');

	$sql = "SELECT * FROM user WHERE username LIKE '%{$keywords}%'";
	$rs = $conn->query($sql);
	$users = array();
	if(!empty($keywords)){
		while($row =  $rs->fetch_assoc()){
			//对用户名进行关键词高亮
			$row['username'] = str_replace($keywords, '<span style="color:red;">' .$keywords . '</span>' , $row['username']);
			$users[ ] = $row;
		}
	}

	print_r($users);
	
 ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>模糊查询器</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
</head>
<body>
	<h1>PHP模糊查询器之用户查询器</h1>
	<form  action="" method="POST">
		用户名：<input type="text" name="keywords" value=""/>
		<input type="submit" name="submit" value="提交查询">
	</form>
	<?php 
		if($users){
			echo '<table width="500" border="1" cellpadding="5">';
			echo '<tr bgcolor="orange"><th>用户名</th><th>邮箱</th><th>性别</th><th>爱好</th></tr>';
			foreach($users as $k=>$v){
				echo '<tr>';
				echo '<td>'. $v['username'] .'</td>';
				echo '<td>'. $v['email'] .'</td>';
				echo '<td>'. $v['sex'] .'</td>';
				echo '<td>'. $v['hobby'] .'</td>';
				echo '</tr>';
			}
			echo '</table>';
		}else{
			echo "没有查询到相关用户";
		}

	 ?>
</body>
</html>
