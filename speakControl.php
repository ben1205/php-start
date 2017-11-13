<?php 
	# 会话控制根据用户用话来跟踪用户信息

	# cookie
	setcookie("pp", 123, time()+60*50);

	echo $_COOKIE["pp"];

	unset($_COOKIE["pp"]);//或者按如下方式将cookie设置过期

	# setcookie("pp", 123, time()-1);

 ?>
 <?php 
 	session_start( );

 	if(!isset($_SESSION['count'])) {
 		$_SESSION['count'] = 0;
 	} else {
 		$_SESSION['count'] ++;
 	}

 	echo $_SESSION['count'];

 	unset($_SESSION['count']);
  ?>
  <?php 
  	if(empty($_SESSION['clk'])) {
  		$_SESSION['clk'] = 1;
  	} else {
  		$_SESSION['clk']++;
  	}
   ?>
   <?php 
   	// $key = ini_get("session.upload_progress.prefix") . ini_get("session.upload_progress.name");
   	// var_dump($_SESSION[$key]);
    ?>
  <!doctype html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<title>标题</title>
  	<meta name="keywords" content="">
  	<meta name="description" content="">
  </head>
  <body>
  	<p>hello visitor, you have seen this page <?php echo $_SESSION['clk']; ?>times.</p>
  	<p>To continue, <a href="speakControl.php?<?php echo htmlspecialchars(SID);?>">click here</a></p>
  </body>
  </html>