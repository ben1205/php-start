<?php 
	#创建一张用户表
	CREATE TABLE user(
		`uid` int(10) AUTO_INCREMENT PRIMARY KEY COMMENT '用户ID',
		`username` varchar(30) NOT NULL DEFAULT ' ' COMMENT '用户名',
		`password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
		`sex`  char(2) NOT NULL DEFAULT '保密' COMMENT '性别',
		`email` varchar(40) NOT NULL DEFAULT '' COMMENT '邮箱',
		`hobby` varchar(255) NOT NULL DEFAULT ' ' COMMENT '兴趣爱好',
		KEY `username` (`username`) 
	)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='用户表';

	#插入基础数据
	INSERT INTO user
	VALUES
	(null, 'apple', '123456' , '男' , 'apple@qq.com' , '篮球'),
	(null, 'orange', '123456' , '男' , 'orange@qq.com' , '篮球'),
	(null, 'bananer', '123456' , '女' , 'bananer@qq.com' , '羽毛球'),
	(null, 'bob', '123456' , '男' , 'bob@qq.com' , '兵乓球'),
	(null, 'coco', '123456' , '男' , 'coco@qq.com' , '滑板'),
	(null, 'lily', '123456' , '女' , 'lily@qq.com' , '冰球'),
	(null, 'lucy', '123456' , '女' , 'lucy@qq.com' , '台球');
 ?>
