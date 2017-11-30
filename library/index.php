<<<<<<< HEAD
<?php ob_start(); ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>会员系统</title>
	<link rel="stylesheet" href="./style.css" type="text/css">
</head>
<body>
	<?php 
		function __autoload($_className) {
			require $_className . '.class.php';
		}

		//实例化主类
		if(isset($_GET['index'])){
			$_main = new Main($_GET['index']);
		}else{
			$_main = new Main();
		}
		
		//运行
		$_main->_run();
	 ?>
</body>
=======
<?php ob_start(); ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>会员系统</title>
	<link rel="stylesheet" href="./style.css" type="text/css">
</head>
<body>
	<?php 
		function __autoload($_className) {
			require $_className . '.class.php';
		}

		//实例化主类
		if(isset($_GET['index'])){
			$_main = new Main($_GET['index']);
		}else{
			$_main = new Main();
		}
		
		//运行
		$_main->_run();
	 ?>
</body>
>>>>>>> 487b7b2ce1a21af65f32e5b87c25f492ab36aea3
</html>