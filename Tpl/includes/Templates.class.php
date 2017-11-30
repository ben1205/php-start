<?php 
	//模板类
	class Templates {
		private $_vars = array();


		//创建一个构造方法，来验证各个目录是否存在
		public function __construct() {
			if(!is_dir(TPL_DIR) || !is_dir(TPL_C_DIR) || !is_dir(CACHE)) {
				exit('ERROR:模板目录或编译目录或缓存目录不存在！请手工设置!');
			}
		}
		
		//assign()方法,用于注入变量
		public function assign($_var, $_value){
			//$_var用于同步模板里的变量名
			//$_value值表示的是index.php里的$_name的值，就是'贝逸潇'
			if(isset($_var) && !empty($_var)){
				//$this->_vars['name']
				$this->_vars[$_var] = $_value;

			}else {
				exit('ERROR:请设置模板变量');
			}
		}

		//display()方法
		public function display($_file){
			//设置模板的路径
			$_tplFile = TPL_DIR . $_file;

			//判断模板是否存在
			if(!file_exists($_tplFile)){
				exit("ERROR：模板文件不存在!");
			}

			//生成编译文件
			$_parFile = TPL_C_DIR . md5($_file) . $_file . '.php';

			//当编译文件不存在，或者模板文件修改过，则生成编译文件
			if(!file_exists($_parFile) || filemtime($_parFile) < filemtime($_tplFile)){
				//引入模板解析类
				require ROOT_PATH . '/includes/Parser.class.php';
				$_parser = new Parser($_tplFile);
				$_parser->compile($_parFile);//编译文件
			}

			//载入编译文件
			include $_parFile;
		}
	}
 ?>