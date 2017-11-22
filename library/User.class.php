<?php 
	//用户类，规范子类的字段和方法

	abstract class User {
		//成员字段
		protected $_username;
		protected $_password;
		protected $_notpassword;
		protected $_email;


		//一个方法，登录注册
		abstract function _query();
		//验证
		abstract function _check();
	}
 ?>