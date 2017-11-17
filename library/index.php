<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>会员系统</title>
	<link rel="stylesheet" href="./style.css" type="text/css">
</head>
<body>
	<?php 
		if(isset($_GET["index"])){
			include($_GET['index'] . ".inc.php");
		}else{
			include("start.inc.php");	
		}
	 ?>
</body>
</html>