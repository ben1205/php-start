<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><!--{webname}--></title>
</head>
<body>
	<?php include 'test.php';?>

	<!--我是静态注释-->

	<?php /* 我是php中的注释，在页面中是看不到的 */?>

	<?php echo $this->_vars['name']?><?php echo $this->_vars['content']?>

	<br/>

	<?php if( $this->_vars['a']){?>
		<div>我是1号界面</div>
	<?php } else { ?>
		<div>我是2号界面</div>
	<?php } ?>
	
	<br/>

	<?php foreach ($this->_vars['array'] as $key => $value) { ?>
		<?php echo $key ?>...<?php echo $value ?> <br/>
	<?php } ?>
</body>
</html>