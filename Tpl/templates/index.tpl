<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><!--{webname}--></title>
</head>
<body>
	{include file="test.php"}

	<!--我是静态注释-->

	{#}我是php中的注释，在页面中是看不到的{#}

	{$name}{$content}

	<br/>

	{if $a}
		<div>我是1号界面</div>
	{else}
		<div>我是2号界面</div>
	{/if}
	
	<br/>

	{foreach $array(key,value)}
		{@key}...{@value} <br/>
	{/foreach}
</body>
</html>