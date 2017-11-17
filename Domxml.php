<?php 
	//使用domdocument来解析xml

	//创建dom对象
	//$_doc = new DOMDocument();

	//载入xml文件
	//$_doc->load('test.xml');

	//取第一个version的值
	//$_version = $_doc->getElementsByTagName('version');

	//item(0)表示第几个，nodeValue表示标签里的值
	//echo $_version->item(0)->nodeValue;

	// foreach($_version as $_v){
	// 	echo $_v->nodeValue . "<br/>";
	// }
 ?>
 <?php 
 	//使用dom创建xml文件

 	//声明domdocument对象
 	$_doc = new DOMDocument('1.0','utf-8');

 	//使用xml标准化格式输出
 	$_doc->formatOutput = true;

 	//使用createelement来创建一个标签
 	$_root = $_doc->createElement('root');

 	//将主标签添加到xml文件里
 	$_doc->appendChild($_root);

 	//创建一个一级标签version
 	$_version = $_doc->createElement('version');

 	//给version标签里赋值
 	$_versionTextNode = $_doc->createTextNode('1.0');

 	//创建一个二级标签user
 	$_user = $_doc->createElement('user');

 	//将二级标签和一级标签放入跟标签中
 	$_version->appendChild($_user);
 	$_root->appendChild($_version);
 	$_doc->appendChild($_root);

 	//生成xml
 	$_doc->save('aaa.xml');

  ?>